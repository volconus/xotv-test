<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class updatePriceTest extends TestCase
{
    public function productsBasicTest()
    {
        $response = $this->get('api/products/BSNL/100MB');
        $response
            ->assertStatus(200)
            ->assertJson([
                'price' => 30,
            ]);
    }

    public function productUpdateBasicTest()
    {
        $response = $this->withHeaders([
            'Bearer' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjAyZjFmZjRmZTYxM2MwNDBhY2RhZTgzZGQzMzQ1NmJjYTM2MTMzOWNkNzYwNDRlNGI0ZDk0NWVmODcyODE3NjNiYmQzYTY3ZGVjNjI0ZmM4In0.eyJhdWQiOiIxIiwianRpIjoiMDJmMWZmNGZlNjEzYzA0MGFjZGFlODNkZDMzNDU2YmNhMzYxMzM5Y2Q3NjA0NGU0YjRkOTQ1ZWY4NzI4MTc2M2JiZDNhNjdkZWM2MjRmYzgiLCJpYXQiOjE1NDg0MzIwOTEsIm5iZiI6MTU0ODQzMjA5MSwiZXhwIjoxNTc5OTY4MDkxLCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.Og8ADZKWttzoCIfyIP2pZsowxtD3X1yucjMQX7nD8-bBixB5RseSy86vyW5Zih-TE5RSzHk_TuK254ZN9lFB9JhUna3Iofu4lHPWhMqiVoNw2_EiqTFpwK24iFzuxYrFnEEv4DJG2cYAqKNgsglyy4l9XpznJiuUESuu8dOpuxiFfU-lHx212wgoiKK2nukRYcqluR-iCWjdHnqBpz5YPHXyhpPYd93szIlA9gf7zytHsQlRJplu72ugGIqqGyBfJD9IO1PECVzBNlrmKsHL-giCT8ILRhmQ6UH2EoA0RYgpv9bDASkDtwDvsLxpNOkdBhSPrITQMCRcAImOgNEzcStfGG1r6KQv-wSqejG68ycVHzzmpXn9M6JkGXhEJO_h65DUwd2BVEny9uh8lVTQZPfn7jnAwnka3gMYIyz9efXCUQtI8uslFtsen7zcbYygOloHCVle4cQhz5N3bAOMstv5FkKssfCZR33LXtwsyhPL3OGbB2B0t0lypZ6F67_5_go5WAM9JAqZtTbq2IZAELQBkgYu8r5iDA0UvaRooRf1o9pUpE2Yu-HtkOq2tt3YKvyvcprthGYtJuoWxb8kXdhWwJHbyLUnJnP0LLFO4trp4tvPY-JjTlN47iYNFdaMS9hDEb7UwkNkccSRpHt4o1j375lGqmfOiotPIhJghYw',
        ])
            ->json('PATCH', 'api/products/Indane energy/Green tariff/North', [
                'new_price' => 30
            ]);

        $response
            ->assertStatus(200)
            ->assertJson([
                'status' => 'OK',
            ]);
    }
}
