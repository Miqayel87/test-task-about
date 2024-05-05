<?php

namespace Tests\Unit\Services;

use App\Services\AboutService;
use App\Models\AboutInfo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AboutServiceTest extends TestCase
{
    use RefreshDatabase;


    /**
     * Test getting all about info.
     *
     * @return void
     */
    public function testGetAllAboutInfo()
    {
        $aboutInfo = [
            0 => [
                'id' => 3,
                'title' => 'example title',
                'content' => 'example content',
                'about_sub_info' => [
                    'title' => 'example sub title',
                    'content' => 'example sub content',
                    'about_info_id' => 3
                ]
            ]
        ];

        $aboutService = new AboutService();

        $result = $aboutService->getAll();

        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Collection::class, $result);

        $this->assertEquals($aboutInfo, $result->toArray());

        foreach ($result as $info) {
            $this->assertNotEmpty($info->aboutSubInfos);
        }
    }
}
