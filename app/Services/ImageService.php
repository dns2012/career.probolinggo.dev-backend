<?php

namespace App\Services;

use App\Tools\ResponseTool;
use Exception;
use GuzzleHttp\Client;

class ImageService
{
    /**
     * Send / upload image to the CDN Api.
     *
     * @param  mixed $data
     * @return array
     */
    public static function upload($data)
    {
        $client = new Client();

        $params = [
            [
                'name' => 'image',
                'contents' => fopen($data['image'], 'rb')
            ],
            [
                'name' => 'user_id',
                'contents' => (! empty($data['user_id']) ? $data['user_id'] : 1)
            ]
        ];

        if (! empty($data['delete'])) {
            $params[] = [
                'name' => 'delete',
                'contents' => $data['delete']
            ];
        }

        $response = $client->request('POST', env('IMAGE_SERVICE_ENDPOINT') . 'upload', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('IMAGE_SERVICE_TOKEN')
            ],
            'multipart' => $params
        ]);

        $response = json_decode($response->getBody()->getContents());

        try {
            if ($response->status) {
                return $response->data->image;
            }
        } catch (Exception $e) {
            return ResponseTool::failure($e->getMessage());
        }
    }

    /**
     * Delete image from the CDN Api.
     *
     * @return void
     */
    public static function delete($data)
    {
        $client = new Client();

        $client->request('POST', env('IMAGE_SERVICE_ENDPOINT') . 'delete/product', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('IMAGE_SERVICE_TOKEN')
            ],
            'form_params' => [
                'user_id' => $data['user_id'],
                'image_one' => $data['image_one'],
                'image_two' => $data['image_two'],
                'image_three' => $data['image_three'],
            ]
        ]);
    }
}
