
@if($thumb->hasVideoFiles())
	<img data-src="https://videodelivery.net/{{ $thumb->videofile->cfs_uid  }}/thumbnails/thumbnail.jpg?time={{ $thumb->videofile->cfs_thumb_offset }}s&width={{ $twidth }}&height={{ $theight }}"
	     alt=""
	     width="{{ $twidth }}" height="{{ $theight }}" class="lazyload" />
@elseif($thumb->hasVideos())
	@include('_img.youtube', ['ytcode' => $obj->video->youtubecode, 'ytsize' => 'maxresdefault', 'ytw' => $twidth, 'yth' => $theight])
@elseif($thumb->hasFeatured())
	@include('_img.lazy', ['lzobj' => $thumb, 'lzw' => $twidth, 'lzh' => $theight])
@else
	@include('_img.placeholder', ['phw' => $twidth, 'phh' => $theight, 'phar' => '4x3', 'phbg' => 'e8ecf0', 'phcol' => 'd4d8dc'])
@endif