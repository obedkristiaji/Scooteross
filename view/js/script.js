//Javascript
document.getElementById('btn_upload').addEventListener('click', function(e) {
    e.preventDefault();

    upload();
})

function upload() {
    let formData = new FormData();
    let fileField = document.querySelector("input[type='file']");

    formData.append('extra', 'abc123');
    formData.append('upfile', fileField.files[0]);

    fetch('./uploadfile', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(response => {
            console.log('Success:', response);
            document.getElementById('img').src = 'http://localhost/M1018003/uploads/' + response.location;
        })
}