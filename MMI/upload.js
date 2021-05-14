function reportInfo(vars, showType = false) {
    if (showType === true) console.log(typeof vars);
    console.log(vars);
}

function addImg(ele, content) {
    var myDIV = document.querySelector(ele);
    var newContent = document.createElement('div');
    newContent.innerHTML = content;

    while (newContent.firstChild) {
        myDIV.appendChild(newContent.firstChild);
    }
}

var feedback = function(res) {
    reportInfo(res, true);
    if (res.success === true) {
        var get_link = res.data.link.replace(/^http:\/\//i, 'https://');
        document.querySelector('.status').classList.add('bg-success');
        var content =
            '<br>Image : ' + '<br><input class="image-url" value=\"' + get_link + '\"/ disabled="disabled" style="background-image: url("Images/background.jpg") !important; width: 200px !important;">' ;
        addImg('.status', content);
    }
};

new Imgur({
    clientid: '2cef23885f6bbc2',
    callback: feedback
});