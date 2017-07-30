$(document).on("change", '.file-field input[type="file"]', function () {
                for (var e = t(this).closest(".file-field"), n = e.find("input.file-path"), i = t(this)[0].files, o = [], r = 0; r < i.length; r++) o.push(i[r].name);
                n.val(o.join(", ")), n.trigger("change")
            });
