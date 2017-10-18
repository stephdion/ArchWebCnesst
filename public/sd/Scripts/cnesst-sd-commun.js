$(document).ready(function ()
{
    champRequis();
    messagesFonctionnels();
    grilles();
    accordions();
    aideContextuelle();
    popupModal();
});

function champRequis()
{
    $(".jsRequis").append(" ").append($("<span>").text("Obligatoire").addClass("sr-only"));
}

function messagesFonctionnels() {
    //ElementVisuel > Message fonctionnel
    $(".alert-non-dismissible").attr("tabindex", "-1");
    $(".alert button.close").focus(function () {
        $(this).closest("section").addClass("focus");
    });
    $(".alert button.close").blur(function () {
        $(this).closest("section").removeClass("focus");
    });
    $(".alert").focusin(function () {
        $(this).addClass("focus");
    });
    $(".alert").focusout(function () {
        $(this).removeClass("focus");
    });

    $('.alert').on('close.bs.alert', function () {
        var listTab = $(document).find(':tabbable');
        var index = listTab.index($(this).find('button:first'));
        listTab.eq(index + 1).focus();
    });

    $("button[type=submit]").click(function () {
        var form = $(this).parents('form:first');
        if (!form.valid()) {
            if ($(".alert-invalid-form").is(":visible")) {
                $(".alert-invalid-form").focus();
                $(".alert-invalid-form button.close").focus();
            }
            else
                $(".input-validation-error:first").focus();
        }

    });
}

function grilles() {
    //ElementVisuel > Grilles, Tableaux et Listes
    $("table input.table-select").change(function () {
        var btnAction = $(this).data("btn-action");
        var cellId = $(this).closest("td").attr("id");
        var cellIdArray = [];

        $("table input.table-select").closest("tr").removeClass("highlight").find("a").attr("tabindex", "-1");
        $(this).closest("tr").addClass("highlight").find("a").attr("tabindex", "0");

        if ($(this).attr('type') == 'checkbox') {
            $("input[name=" + $(this).attr('name') + "]:checked").each(function () {
                cellIdArray.push($(this).closest("td").attr("id"));
            });

            $(btnAction).attr("aria-describedby", cellIdArray.join(" "));
        } else {
            $(btnAction).attr("aria-describedby", cellId);
        }

    });

    $("table input.table-select").focus(function () {
        $(this).closest("tr").addClass("focus");
    });
    $("table input.table-select").blur(function () {
        $(this).closest("tr").removeClass("focus");
    });
}

function accordions() {
    //Accordion
    $(".panel-heading.accordion-toggle").attr("tabindex", "0");
    $(".panel-heading.accordion-toggle").focusin(function () {
        $(this).addClass("focus");
    });
    $(".panel-heading.accordion-toggle").focusout(function () {
        $(this).removeClass("focus");
    });
    $(".panel-heading.accordion-toggle").unbind("keyup").keyup(function (e) {
        var code = e.which;
        if (code == 13 || code == 32) {
            $(this).click();
        }
    });
}

function menu() {
    //Menu
    $('.navbar').focusout(function (e) {
        if (!$(e.relatedTarget).hasClass("submenu-focus")) {
            $(this).find(".open .dropdown-toggle").dropdown('toggle');
            if (!$(e.relatedTarget).hasClass("menu-focus")) {
                $(this).find(".navbar-collapse.in").collapse('toggle');
            }
        }
    });
    //--
}

function aideContextuelle() {
    //Aide > Aide Contextuelle
    $("button.popup-aide").click(function () {
        //Obtenir les attributs du bouton
        var id = $(this).attr('id');
        var url = $(this).data('url');
        var titre = $(this).data('titre');
        var texte = $(this).data('texte');

        if (typeof texte == 'undefined')
            texte = '';

        //Obtenir le template
        var template = $('#aide-modal-template').html();

        //Remplacer les variables dans le template
        var modal = template
            .replaceAll('{{id_modal}}', id + '_modal')
            .replaceAll('{{id_body}}', id + '_body_modal')
            .replaceAll('{{titre}}', titre)
            .replaceAll('{{texte}}', texte);

        //Vérifier si le composant existe déjà
        if (!$("#" + id + '_modal').length) {
            //Ajouter le code du template dans la page
            $('body').append(modal);

            //Appeler la page de destin avec JQuery Ajax
            if (typeof url != 'undefined')
                $("#" + id + '_body_modal').load(url);
        }

        //Ouvrir le modal Bootstrap
        $("#" + id + '_modal').modal();
    });
    $("button.popup-aide").attr("aria-expanded", "false");
}

function popupModal() {

    //ElementVisuel > Modal
    $("button.popup-confirmation").click(function (event) {

        //Obtenir les attributs du bouton
        var boutonOrigine = $(this);
        var idBouton = $(boutonOrigine).attr('id');
        var idModal = idBouton + '_modal';
        var titre = $(boutonOrigine).data('titre');
        var texte = $(boutonOrigine).data('texte');
        var texteBtnOui = $(boutonOrigine).data('btn-oui');
        var texteBtnNon = $(boutonOrigine).data('btn-non');


        //Vérifier si l'action a été déjà confirmé
        if ($(boutonOrigine).val() != 'confirmé')
            event.preventDefault();
        else {
            $(boutonOrigine).val('');
            var modal = $("#" + idModal);
            $(modal).modal('hide');
            return;
        }

        if (typeof texte == 'undefined')
            texte = '';

        //Obtenir le template
        var template = $('#modal-template').html();

        //Remplacer les variables dans le template
        var modalContent = template
            .replaceAll('{{id_modal}}', idModal)
            .replaceAll('{{titre}}', titre)
            .replaceAll('{{texte}}', texte)
            .replaceAll('{{btn_oui}}', texteBtnOui)
            .replaceAll('{{btn_non}}', texteBtnNon);

        //Vérifier si le composant existe déjà
        if (!$("#" + idModal).length) {
            //Ajouter le code du template dans la page
            $('body').append(modalContent);
        }

        //Ouvrir le modal Bootstrap
        var modal = $("#" + idModal);
        $(modal).modal('show');

        //Ajouter l'événement click dans le bouton de confirmation
        $("button.btn-confirmation", modal).click(function () {
            $(boutonOrigine).val('confirmé');
            $(boutonOrigine).click();

        });
    });
}
