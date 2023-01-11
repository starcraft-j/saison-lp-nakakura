$(function () {
  countDown();
});

function countDown() {
  var startTime = new Date();
  //カウントダウンの終了期日を記入↓
  var endTime = new Date('February 9,2023, 00:00:00');
  var diff = endTime - startTime;
  var times = 24 * 60 * 60 * 1000;
  var day = Math.floor(diff / times)
  var hour = Math.floor(diff % times / (60 * 60 * 1000))
  var min = Math.floor(diff % times / (60 * 1000)) % 60
  var sec = Math.floor(diff % times / 1000) % 60 % 60
  // var ms = Math.floor(diff % times / 10) % 100
  if (diff > 0) {
    $(".timer-text").text(day + '日' + hour + '時間' + min + '分' + sec + '秒');
    setTimeout('countDown()', 10);
  } else {
    //終了した時のテキスト
    $("#timer").remove();
  }
}