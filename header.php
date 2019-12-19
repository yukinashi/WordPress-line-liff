<script src="https://static.line-scdn.net/liff/edge/2.1/sdk.js"></script>
<script>

function initializeLiff(myLiffId) {
    liff
        .init({
            liffId: myLiffId
        })
        .then(() => {
            // start to use LIFF's api
            initializeApp();
        })
        .catch((err) => {
            document.getElementById("liffAppContent").classList.add('hidden');
            document.getElementById("liffInitErrorMessage").classList.remove('hidden');
        });
}
window.onload = function (e) {
initializeLiff("1614848598-b57oa4kO");
       const box = document.getElementById("liff-box");
        if(liff.isInClient()){
            box.style.display ="block";
        }else{
            box.style.display ="none";
        }
}
    function send(text) {
        liff.sendMessages([{
            type: 'text',
            text: text
        }]).then(function () {
            window.alert("送信しました");
        }).catch(function (error) {
            window.alert("送信エラーが発生しました: " + error);
        });
    }

</script>