<?
    echo "map test";
?>
<script>
    const apiKey = "0d30c953abb05c895a2d328f048ac672";
</script>

<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=0d30c953abb05c895a2d328f048ac672&libraries=services"></script>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Kakao 지도 시작하기</title>
    </head>
    <body>
        <div id="map" style="width:500px;height:400px;"></div>
        <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=발급받은 APP KEY를 넣으시면 됩니다."></script>
        <script>
            var container = document.getElementById('map');
            var options = {
                center: new kakao.maps.LatLng(33.450701, 126.570667),
                level: 3
            };

            var map = new kakao.maps.Map(container, options);
        </script>
    </body>
</html>