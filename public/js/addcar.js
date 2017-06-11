$(document).ready(function () {

    //     $.ajax({
    //         url: '/loadmodels',
    //         method: 'POST',
    //         data: {
    //             'make': make,
    //             '_token': $('[name="_token"]').val()
    //         },
    //         success: function (response) {
    //
    //             $("#model").html('');
    //             $("#model").append("<option>" + 'Модел' + "</option>");
    //
    //             var array = JSON.parse(response);
    //
    //             if (array.length == 0) {
    //                 $('#model').prop("disabled", true);
    //                 return 0;
    //             }
    //
    //             $('#model').prop("disabled", false);
    //
    //             var appendData = [];
    //             for (var i = 0; i < array.length; i++) {
    //                 appendData += "<option value = '" + array[i] + "', class = 'newitem'>" + array[i] + " </option>";
    //             }
    //             $("#model").append(appendData);
    //         }
    //     });
    // });

    $('#submit').on('click', function (e) {

        $("#result").append('Поле -МАРКА- е задължително!');
        $("#result").removeClass('hidden');

        e.preventDefault();

        var form = document.getElementById('form');
        var request = new XMLHttpRequest();
        var formData = new FormData(form);

        request.open('post', '/addcar');
        request.addEventListener('load', transferComplete);
        request.send(formData);
    });

});

function transferComplete(data) {
    console.log(data.currentTarget.response);
}

window.onmousedown = function (e) {
    var el = e.target;
    if (el.tagName.toLowerCase() == 'option' && el.parentNode.hasAttribute('multiple')) {
        e.preventDefault();

        if (el.hasAttribute('selected')) el.removeAttribute('selected');
        else el.setAttribute('selected', '');

        var select = el.parentNode.cloneNode(true);
        el.parentNode.parentNode.replaceChild(select, el.parentNode);
    }
}

// --------------------------------------------

$('#add_more').click(function () {
    "use strict";
    $(this).before($("<div/>", {
        id: 'filediv'
    }).fadeIn('slow').append(
        $("<input/>", {
            name: 'file[]',
            type: 'file',
            id: 'file',
            multiple: 'multiple',
            accept: 'image/*'
        })
    ));
});

$('#upload').click(function (e) {
    "use strict";
    e.preventDefault();

    if (window.filesToUpload.length === 0 || typeof window.filesToUpload === "undefined") {
        alert("No files are selected.");
        return false;
    }

    // Now, upload the files below...
    // https://developer.mozilla.org/en-US/docs/Using_files_from_web_applications#Handling_the_upload_process_for_a_file.2C_asynchronously
});

deletePreview = function (ele, i) {
    "use strict";
    try {
        $(ele).parent().remove();
        window.filesToUpload.splice(i, 1);
    } catch (e) {
        console.log(e.message);
    }
}

$("#file").on('change', function () {
    "use strict";

    // create an empty array for the files to reside.
    window.filesToUpload = [];

    if (this.files.length >= 1) {
        $("[id^=previewImg]").remove();
        $.each(this.files, function (i, img) {
            var reader = new FileReader(),
                newElement = $("<div id='previewImg" + i + "' class='previewBox'><img /></div>"),
                deleteBtn = $("<span class='delete' onClick='deletePreview(this, " + i + ")'>X</span>").prependTo(newElement),
                preview = newElement.find("img");

            reader.onloadend = function () {
                preview.attr("src", reader.result);
                preview.attr("alt", img.name);
            };

            try {
                window.filesToUpload.push(document.getElementById("file").files[i]);
            } catch (e) {
                console.log(e.message);
            }

            if (img) {
                reader.readAsDataURL(img);
            } else {
                preview.src = "";
            }

            newElement.appendTo("#filediv");
        });
    }
});