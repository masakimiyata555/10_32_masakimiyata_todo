//リクエストパラメーターのセット
const KEY = 'AIzaSyCN5Rlwyp-1jsfxQsN6fvSDAXos1PnEAlo'; //取得したapiキー
let url = 'https://www.googleapis.com/youtube/v3/search?'; //APIURL
url += 'type=video';//動画を検索する ※+=で結合と代入を同時に行う
url += '&part=snippet'; //検索結果にすべてのプロパティを含む
url += '&q=プログラミング+WordPress'; //検索ワード 語り継がれる サッカー
url += '&videoEmbeddable=true'; //WEBページに埋め込み可能な動画のみを検索
url += '&videoSyndicated=true'; //youtube.con以外で再生できる動画のみに限定
url += '&maxResults=1';//動画の最大取得件数 
url += '&key=' + KEY;//動画の最大取得件数 
//console.log(url);

//htmlが読み込まれてから実行する処理
$(function () {
    //youtubeの動画を検索して取得
    $.ajax({
        url: url,
        dataType: 'JSONP'
        //     }).success(function (data) {
        //         alert('success!!');
        //     }).error(function (XMLHttpRequest, textStatus, errorThrown) {
        //         alert('error!!!');
        //         console.log("XMLHttpRequest : " + XMLHttpRequest.status);
        //         console.log("textStatus     : " + textStatus);
        //         console.log("errorThrown    : " + errorThrown.message);
        //     });
        // });
    }).done(function (data) {
        if (data.items) {
            setData(data);          //データ取得が成功した時の処理
        } else {
            console.log(data);
            alert('該当するデータが見つかりませんでした')
        }
        //データ取得が成功した時の処理
    }).fail(function (data) {
        alert('通信に失敗しました');
    });
});
//データ取得が成功した時の処理
function setData(data) {
    let result = '';
    let video = '';
    //動画を表示するhtmlをつくる
    for (let i = 0; i < data.items.length; i++) {
        video = '<iframe src="https://www.youtube.com/embed/';
        video += data.items[i].id.videoId;
        video += ' " allowfullscreen></iframe>';
        result += '<div class="video">' + video + '</div>'
    }
    //HTMLに反映する
    $('#videoList').html(result);
}
