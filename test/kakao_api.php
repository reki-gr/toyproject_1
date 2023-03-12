<?
    echo "map test";
?>
<script>
    const apiKey = "0d30c953abb05c895a2d328f048ac672";
</script>

<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=0d30c953abb05c895a2d328f048ac672&libraries=services"></script>
<script
  src="https://code.jquery.com/jquery-3.6.4.js"
  integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
  crossorigin="anonymous"></script>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>카카오 맵 구현</title>
    </head>
    <body>
        <div id="map" style="width:70%;height:70%;"></div>
        <script>
            var container = document.getElementById('map');
            var currentPosition = {
                "latitude" : 37.5149219568,
                "longitude" : 126.8996554114
            }
            var options = {
                "center" : new kakao.maps.LatLng(currentPosition.latitude, currentPosition.longitude),
                "level" : 8
            };

            var map = new kakao.maps.Map(container, options);
            let markerArr = [];
            let overlayArr = [];

                var storeInfo = searchStoreInfo();

                var targetPositions = [];
                var targetContents = [];
                for(var i = 0; i < storeInfo.length; i++) {
                    var targetPosition = {
                        "title" : storeInfo[i].name,
                        "latlng" : new kakao.maps.LatLng(storeInfo[i].latitude, storeInfo[i].longitude)
                    }

                    var targetContent = '<div class="wrap">' + 
                                        '    <div class="info">' + 
                                        '        <div class="title">' + 
                                        '            '+ storeInfo[i].name + 
                                        '            <div class="close" onclick="closeOverlay()" title="닫기"></div>' + 
                                        '        </div>' + 
                                        '        <div class="body">' + 
                                        '            <div class="img">' +
                                        '                <img src="https://cfile181.uf.daum.net/image/250649365602043421936D" width="73" height="70">' +
                                        '           </div>' + 
                                        '            <div class="desc">' + 
                                        '                <div class="ellipsis">주소 1</div>' + 
                                        '                <div class="jibun ellipsis">주소 2</div>' + 
                                        '                <div><a href="https://www.kakaocorp.com/main" target="_blank" class="link">홈페이지</a></div>' + 
                                        '            </div>' + 
                                        '        </div>' + 
                                        '    </div>' +    
                                        '</div>';
                    targetPositions.push(targetPosition);
                    targetContents.push(targetContent);
                }

                console.log(markerArr);
                for(let i = 0; i < storeInfo.length; i++) {
                    let marker = new kakao.maps.Marker({
                        "map" : map,
                        "position" : targetPositions[i].latlng,
                        "title" : targetPositions[i].title
                    });

                    let customOverlay = new kakao.maps.CustomOverlay({
                        "clickable" : true,
                        "position" : targetPositions[i].latlng,
                        "content" : targetContents[i],
                        "position" : marker.getPosition()
                    });

                    marker.setMap(map);

                    kakao.maps.event.addListener(customOverlay, 'click', function() {
                        overlayArr.forEach(function (element) {
                            element.setMap(null);
                        })
                    })

                    kakao.maps.event.addListener(marker, 'click', function() {
                        customOverlay.setMap(map);
                        overlayArr.push(customOverlay);
                    });
                }

            function addMarker(position, content) {
                var marker = new kakao.maps.Marker({
                    "map" : map,
                    "position" : position.latlng,
                    "title" : position.title
                });

                var customOverlay = new kakao.maps.CustomOverlay({
                    "clickable" : true,
                    "position" : position.latlng,
                    "content" : content,
                    "position" : marker.getPosition()
                });

                marker.setMap(map);

                kakao.maps.event.addListener(marker, 'click', function() {
                    customOverlay.setMap(map);
                    console.log(customOverlay);
                });

                markerArr.push(marker);
                overlayArr.push(customOverlay);
            }

            // function closeOverlay(overlay) {
            //     overlay.setMap(null);
            // }
            // console.log(closeOverlay());

            function searchStoreInfo(currentPosition) {
                let storeInfo;
                $.ajax({
                    url : "/api/kakao/store_info_load.php",
                    // data : currentPosition,
                    type : "get",
                    dataType : "json",
                    async : false,
                    success : function(result) {
                        storeInfo = result;
                    }
                });
                return storeInfo;
            }
            
            // function markerSetup(positions) {
            //     for(var i = 0; i < positions.length; i++) {
            //         var marker = new kakao.maps.Marker({
            //             "map" : map,
            //             "position" : positions[i].latlng,
            //             "title" : positions[i].title
            //         });
            //     }
            // }

        </script>
    </body>
</html>