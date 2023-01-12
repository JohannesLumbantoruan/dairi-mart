




</div>

<script>

var i = 0;
var images = [];
var slideTime = 5000; // 3 seconds


images[0] = './asset/img/iklan.jpg';
images[1] = './asset/img/iklan2.jpg';
images[2] = './asset/img/iklan3.jpg';

function changePicture() {
    document.getElementById('mydiv').style.backgroundImage = "url(" + images[i] + ")";

    if (i < images.length - 1) {
        i++;
    } else {
        i = 0;
    }
    setTimeout(changePicture, slideTime);
}

window.onload = changePicture,changePicture2;

	</script>

