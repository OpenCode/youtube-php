YoutubePHP
===========

A PHP Class to get youtube video info by video id

Init the class with:

    include_once('lib_path/YoutubePHP.php');
    $yt = new YoutubeParser('VIDEO_ID');
    
then call the method you need: 

    $yt->method();

METHODS
----------

### get_id()

result: [String] Get the Video ID

parameters: None

### get_info()

result: [Array] Get info array

parameters: None

### get_url()

result: [String] Get complete url for the video

parameters: None

### get_parameter($parameter='', $human=true)

result: [String] Get the relative parameter value

parameters:

* $parameter : the parameter key
* $human : if true return readble value

### author()

result: [String] Video author name

parameters: None

### duration()

result: [String] Video duration in seconds

parameters: None

### views()

result: [String] Video views

parameters: None

### keywords($as_array=false)

result: [String or Array] Return a list of keywords as string separated by comma or as array

parameters:

* $as_array : if true return keywors as array else return keyword as string separated by comma

### timestamp()

result: [String] Video timestamp

parameters: None

### date($format='Y-m-d')

result: [String] Readble date of video publish

parameters:

* $format : string for date format
