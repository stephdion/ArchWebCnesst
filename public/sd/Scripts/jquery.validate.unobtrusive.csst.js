//Ce code permet de saisir un montant utilisant des espaces 
//comme symbole de groupement de chiffres, ex : 1 000 000, 00
$.validator.methods.number = function (value, element) {
    return this.optional(element) || /^-?(?:\d+|\d{1,3}(?:[\s\.,]\d{3})+)(?:[\.,]\d+)?$/.test(value);
}

$.validator.setDefaults({
    showErrors: function (errorMap, errorList) {

        var errors = $.validator.errorList;
        this.defaultShowErrors();

        if (!this.valid()) {
            $(".alert-valid-form").removeClass("alert-valid-form").addClass("alert-invalid-form");
        }


        var list;
        var radios = [];
        var total = 0;
        list = "<ul>"

        $(".input-validation-error").each(function () {
            var inputId = $(this).attr("id");
            var errorLabel;

            if ($(this).is(":radio") || $(this).is(":checkbox")) {
                var radioName = $(this).attr('name');
                errorLabel = $(this).closest("fieldset").find("legend").clone().children().remove().end().text();

                if (radios.indexOf(radioName) == -1)
                    radios.push(radioName);
                else
                    return true;
            } else {
                errorLabel = $("label[for=" + inputId + "]").clone().children().remove().end().text();
            }
            list += "<li><a href='#" + inputId + "' class='linkFocusErreur' data-id-input='#" + inputId + "'>" + errorLabel + "</a></li>";
            total += 1;

            //Changer l'ordre aria-describedby
            var ariaDesc = $(this).attr("aria-describedby");
            var idDescError = $(this).attr("id") + "-error";
            var indexError = ariaDesc.indexOf(idDescError);
            if (indexError > 0) {
                var ariaDescOrd = $.trim(ariaDesc.substring(indexError, indexError + idDescError.length) + " " + ariaDesc.substring(0, indexError));
                $(this).attr("aria-describedby", ariaDescOrd);
            }
        });

        list += "</ul>"
        $("#listChampsErreur").html(list);
        $(".totalChampErreur").text(total);

        if (total == 0) {
            $(".alert-invalid-form").removeClass("alert-invalid-form").addClass("alert-valid-form");
        } else {
            $(".alert-valid-form").removeClass("alert-valid-form").addClass("alert-invalid-form");
        }

        //Enlever les attributs "aria-required"
        $("input").removeAttr("aria-required");

        $(".linkFocusErreur").click(function () {
            //var inputId = $(this).data("id-input");
            //$(inputId).focus();
            $($(this).attr('href')).focus();
            return false;
        });

    },
    focusInvalid: false
});