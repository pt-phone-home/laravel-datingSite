$(document).ready(function() {
    $(".userStatus").change(function() {
        // alert("test");
        var user_id = $(this).attr("rel");
        if ($(this).prop("checked") == true) {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                type: "post",
                url: "/admin/update-user-status",
                data: { status: "1", user_id: user_id },
                success: function(resp) {
                    alert(resp);
                },
                error: function() {
                    alert("error");
                }
            });
        } else {
            $.ajax({
                header: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                type: "post",
                url: "admin/update-user/status",
                data: { status: "0", user_id: user_id },
                success: function(resp) {
                    alert(resp);
                },
                error: function() {
                    alert("error");
                }
            });
        }
    });

    $(".userPhotoStatus").change(function() {
        var photo_id = $(this).attr("rel");
        if ($(this).prop("checked") == true) {
            // To make status as "Enable" (1)
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                type: "post",
                url: "/admin/update-photo-status",
                data: { status: "1", photo_id: photo_id },
                success: function(resp) {
                    /*alert(resp);*/
                },
                error: function() {
                    alert("Error");
                }
            });
        } else {
            // To make status as "Disable" (0)
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                type: "post",
                url: "/admin/update-photo-status",
                data: { status: "0", photo_id: photo_id },
                success: function(resp) {
                    /*alert(resp);*/
                },
                error: function() {
                    alert("Error");
                }
            });
        }
    });

    // Enable/Disable User Photo
    $(".userPhotoStatus").change(function() {
        var photo_id = $(this).attr("rel");
        if ($(this).prop("checked") == true) {
            // To make status as "Enable" (1)
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                type: "post",
                url: "/admin/update-photo-status",
                data: { status: "1", photo_id: photo_id },
                success: function(resp) {
                    /*alert(resp);*/
                },
                error: function() {
                    alert("Error");
                }
            });
        } else {
            // To make status as "Disable" (0)
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                type: "post",
                url: "/admin/update-photo-status",
                data: { status: "0", photo_id: photo_id },
                success: function(resp) {
                    /*alert(resp);*/
                },
                error: function() {
                    alert("Error");
                }
            });
        }
    });
});
