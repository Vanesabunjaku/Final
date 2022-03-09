<script>
    var i=0;
    var imgArray = [
        "hadley.jpg",
        "hadley1.jpg",
        "hadley2.jpg",
        "hadley3.jpg"
    ];

    function  ndrroImg() {
        document.getElementsById('slideshow').src= imgArray[i];
        if(i < imgArray.length - 1) {
            i++;
        } else {
            i = 0;
        }
        
    }
    document.body.addEventListener('load', ndrroImg());
</script>