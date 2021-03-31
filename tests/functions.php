<?php
require '../functions.php';
use PHPUnit\Framework\TestCase;
class Functions extends TestCase{

    public function testSuccessDisplaySongs()
    {
        //expected result of the test
        $expected = "<tr>";
        $expected .= '<td><a href="http://open.spotify.com/track/track_link test' target='_blank'/>title test</td>';
        $expected .= '<td>artist test</td>';
        $expected .= '<td>album name test</td>';
        $expected .='<td>' . "<a href='track preview test' target='_blank'>" . "<img src='artwork test' width=175 alt='album art'/>" . '</a></td>';
        $expected .= "</tr>";
        //inputs to get expected result
        $input = [[
            "title"=>"title test",
            "artist"=>"artist test",
            "album_name"=>"album name test",
            "track_preview"=>"track preview test",
            "track_link"=>"track link test",
            "artwork"=>"artwork test",
        ]];
        //run the real function and pass in the inputs
        $case = displaySongs($songs);
        //compare the expected result to the actual result
        $this->assertEquals($expected, $case);
    }

    public function testMalformedCodeDisplaySongs(){
        //inputs to get expected result
        $input = 1;
        //compare the expected result to the actual result
        $this->expectException(TypeError::class);
        displaySongs($input);
    }
}