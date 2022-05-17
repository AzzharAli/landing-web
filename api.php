<?php

//Channel Status

$hilicurl = curl_init();

curl_setopt($hilicurl, CURLOPT_URL, 'https://www.googleapis.com/youtube/v3/channels?part=snippet,contentDetails,statistics&id=UCutjtQpRYr3utArPja0sFKQ&key=AIzaSyDBhYVuJRoY1EtuK5O4krql8r_Yg8IzGVE');

curl_setopt($hilicurl, CURLOPT_RETURNTRANSFER, 1);

$lawacurl = curl_exec($hilicurl);

curl_close($hilicurl);

$lawacurl = json_decode($lawacurl, true);

$mainChannelData = $lawacurl;

//Secondary

$hilicurl2 = curl_init();

curl_setopt($hilicurl2, CURLOPT_URL, 'https://www.googleapis.com/youtube/v3/channels?part=snippet,contentDetails,statistics&id=UCI9F_k7LDS8Z1ruzm25rALw&key=AIzaSyDBhYVuJRoY1EtuK5O4krql8r_Yg8IzGVE');

curl_setopt($hilicurl2, CURLOPT_RETURNTRANSFER, 1);

$lawacurl2 = curl_exec($hilicurl2);

curl_close($hilicurl2);

$lawacurl2 = json_decode($lawacurl2, true);

$secondaryChannelData = $lawacurl2;


//var_dump($mainChannelData);
//var_dump($secondaryChannelData);

//nama channel
$mainChannelName = $mainChannelData['items'][0]['snippet']['title'];
$secondaryChannelName = $secondaryChannelData['items'][0]['snippet']['title'];


//foto profil channel
$mainChannelProfilePicture = $mainChannelData['items'][0]['snippet']['thumbnails']['default']['url'];
$secondaryChannelProfilePicture = $secondaryChannelData['items'][0]['snippet']['thumbnails']['default']['url'];


//deskripsi
$mainChannelSubscribe = $mainChannelData['items'][0]['statistics']['subscriberCount'];
$secondaryChannelSubscribe = $secondaryChannelData['items'][0]['statistics']['subscriberCount'];







//Recent Video
$contentDetail = curl_init();

curl_setopt($contentDetail, CURLOPT_URL, 'https://www.googleapis.com/youtube/v3/activities?part=snippet,contentDetails&channelId=UCutjtQpRYr3utArPja0sFKQ&key=AIzaSyDBhYVuJRoY1EtuK5O4krql8r_Yg8IzGVE');

curl_setopt($contentDetail, CURLOPT_RETURNTRANSFER, 1);

$hasilContentDetail = curl_exec($contentDetail);

curl_close($contentDetail);

$hasilContentDetail = json_decode($hasilContentDetail, true);

//Last Video ID
$mainChannelLastVideoId = $hasilContentDetail['items'][0]['contentDetails']['upload']['videoId'];

//Last Video Title
$mainChannelLastVideoTitle = $hasilContentDetail['items'][0]['snippet']['title'];

//Last Video Description
$mainChannelLastVideoDescription = $hasilContentDetail['items'][0]['snippet']['description'];

//Last Video Upload Date
$mainChannelLastVideoUploadDate = $hasilContentDetail['items'][0]['snippet']['publishedAt'];
$mainUploadDateOnly = explode('T',$mainChannelLastVideoUploadDate,2);
$splitAllDate = explode('-',$mainUploadDateOnly[0],3);
$tahunUpload = $splitAllDate[0];
$tanggalUpload = $splitAllDate[2];
$bulanUpload = $splitAllDate[1];


if($bulanUpload = "01"){$bulanUploadFix = "Januari";
}
if($bulanUpload = "02"){$bulanUploadFix = "Februari";
}
if($bulanUpload = "03"){$bulanUploadFix = "Maret";
}
if($bulanUpload = "04"){$bulanUploadFix = "April";
}
if($bulanUpload = "05"){$bulanUploadFix = "Mei";
}
if($bulanUpload = "06"){$bulanUploadFix = "Juni";
}
if($bulanUpload = "07"){$bulanUploadFix = "Juli";
}
if($bulanUpload = "08"){$bulanUploadFix = "Agustus";
}
if($bulanUpload = "09"){$bulanUploadFix = "September";
}
if($bulanUpload = "10"){$bulanUploadFix = "Oktober";
}
if($bulanUpload = "11"){$bulanUploadFix = "November";
}
if($bulanUpload = "12"){$bulanUploadFix = "Desember";
}
else
{
    $bulanUploadFix = "Unknown Month";
};

$tanggalUploadEmbed = $tanggalUpload ." " . $bulanUploadFix . " " . $tahunUpload;

?>

