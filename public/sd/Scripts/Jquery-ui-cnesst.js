/*initialisation du datepicker pour la csst */
(function ($) {
    // ajoute un sélecteur de date à un champ texte
    $.fn.csstDatepicker = function (params) {
        return this.each(function () {
            var $target = $(this);
            var isDisabled = false;

            if (typeof $.prototype.prop !== 'function') {
                if ($target.attr('disabled') == 'disabled' || $target.attr('disabled') == true) {
                    isDisabled = true;
                }
            }
            else {
                isDisabled = $target.prop('disabled');
            }

            var date = new Date();
            date.setMonth(date.getMonth(), 1);

            var options = {
                defaultDate: date,
                showOn: 'button',
                buttonText: '',
                disabled: isDisabled,
                beforeShow: function (input, inst) { $("#ui-datepicker-div").data("inst", inst); },
                onClose: function (dateText, inst) { $("#" + $(inst)[0].id).focus();}
            };

            var obj = {};

            if (params != null && params != "") {
                var tabTmp = params.split(",");
                for (i = 0; i < tabTmp.length; i++) {
                    var tmp = tabTmp[i].split(":");
                    var valeur = "";
                    for (j = 1; j < tmp.length; j++) {
                        if (j == 1) {
                            valeur = $.trim(tmp[j].replace(/\'/g, ''));
                        }
                        else {
                            valeur = valeur + ":" + $.trim(tmp[j].replace(/\'/g, ''));
                        }

                    }
                    obj[$.trim(tmp[0])] = valeur;
                }
            }

            $.extend(options, obj);
            $target.datepicker(options);

            var calendar = $target.next();
            var addon = calendar.next();
            if (!addon.hasClass("input-group-addon") || !addon.hasClass("jsbtn-date-picker")) return true;
            if (!isDisabled) calendar.attr("tabindex", "-1");
            calendar.click(function () { $target.datepicker('show'); });
            calendar.attr("aria-label", "Calendrier");
            calendar.addClass("ui-datepicker-trigger btn glyphicon glyphicon-calendar")
            addon.append(calendar);
            
            
        });
    }

    $.extend($.datepicker, {
        _doKeyDown: function (event) {
            // sur les flèches, si le pointeur est dans le calendrier, ne rien faire car le pointeur et roi!
            if ((event.keyCode == 37 || event.keyCode == 38 || event.keyCode == 39 || event.keyCode == 40))
            {
                if ($calendarcellhover != null) { return true; }
            }
            var onSelect, dateStr, sel,
                inst = $.datepicker._getInst(event.target),
                handled = true,
                isRTL = inst.dpDiv.is(".ui-datepicker-rtl");

            inst._keyEvent = true;
            if ($.datepicker._datepickerShowing) {
                switch (event.keyCode) {
                    case 9:
                        // On ne veux pas cacher le datepicker sur le tab, on veux naviger dedans
                        $.datepicker._hideDatepicker();
                        handled = false;
                        break; // hide on tab out
                    case 13: sel = $("td." + $.datepicker._dayOverClass + ":not(." +
                        $.datepicker._currentClass + ")", inst.dpDiv);
                        if (sel[0]) {
                            $.datepicker._selectDay(event.target, inst.selectedMonth, inst.selectedYear, sel[0]);
                        }

                        onSelect = $.datepicker._get(inst, "onSelect");
                        if (onSelect) {
                            dateStr = $.datepicker._formatDate(inst);

                            // Trigger custom callback
                            onSelect.apply((inst.input ? inst.input[0] : null), [dateStr, inst]);
                        } else {
                            $.datepicker._hideDatepicker();
                        }

                        return false; // don't submit the form
                    case 27: $.datepicker._hideDatepicker();
                        break; // hide on escape
                    case 33: $.datepicker._adjustDate(event.target, (event.ctrlKey ?
                        -$.datepicker._get(inst, "stepBigMonths") :
                        -$.datepicker._get(inst, "stepMonths")), "M");
                        break; // previous month/year on page up/+ ctrl
                    case 34: $.datepicker._adjustDate(event.target, (event.ctrlKey ?
                        +$.datepicker._get(inst, "stepBigMonths") :
                        +$.datepicker._get(inst, "stepMonths")), "M");
                        break; // next month/year on page down/+ ctrl
                    case 35: if (event.ctrlKey || event.metaKey) {
                        $.datepicker._clearDate(event.target);
                    }
                        handled = event.ctrlKey || event.metaKey;
                        break; // clear on ctrl or command +end
                    case 36: if (event.ctrlKey || event.metaKey) {
                        $.datepicker._gotoToday(event.target);
                    }
                        handled = event.ctrlKey || event.metaKey;
                        break; // current on ctrl or command +home
                    case 37: $.datepicker._adjustDate(event.target, (isRTL ? +1 : -1), "D");
                    //case 37: if (event.ctrlKey || event.metaKey) {
                    //    $.datepicker._adjustDate(event.target, (isRTL ? +1 : -1), "D");
                    //}
                        handled = event.ctrlKey || event.metaKey;
                        // -1 day on ctrl or command +left
                        if (event.originalEvent.altKey) {
                            $.datepicker._adjustDate(event.target, (event.ctrlKey ?
                                -$.datepicker._get(inst, "stepBigMonths") :
                                -$.datepicker._get(inst, "stepMonths")), "M");
                        }

                        // modifier la div qui annonce la date pour l'accessibilité
                        // next month/year on alt +left on Mac
                        break;
                    //case 38: if (event.ctrlKey || event.metaKey) {
                    //    $.datepicker._adjustDate(event.target, -7, "D");
                    //}
                    case 38: $.datepicker._adjustDate(event.target, -7, "D");
                        handled = event.ctrlKey || event.metaKey;
                        break; // -1 week on ctrl or command +up
                    //case 39: if (event.ctrlKey || event.metaKey) {
                    //    $.datepicker._adjustDate(event.target, (isRTL ? -1 : +1), "D");
                    //}
                    case 39: $.datepicker._adjustDate(event.target, (isRTL ? -1 : +1), "D");
                        handled = event.ctrlKey || event.metaKey;

                        // +1 day on ctrl or command +right
                        if (event.originalEvent.altKey) {
                            $.datepicker._adjustDate(event.target, (event.ctrlKey ?
                                +$.datepicker._get(inst, "stepBigMonths") :
                                +$.datepicker._get(inst, "stepMonths")), "M");
                        }

                        // next month/year on alt +right
                        break;
                    //case 40: if (event.ctrlKey || event.metaKey) {
                    //    $.datepicker._adjustDate(event.target, +7, "D");
                    //}
                    case 40: $.datepicker._adjustDate(event.target, +7, "D");
                        handled = event.ctrlKey || event.metaKey;
                        break; // +1 week on ctrl or command +down
                    default: handled = false;
                }
            } else if (event.keyCode === 36 && event.ctrlKey) { // display the date picker on ctrl+home
                $.datepicker._showDatepicker(this);
            } else {
                handled = false;
            }

            //if ((event.keyCode == 37 || event.keyCode == 38 || event.keyCode == 39 || event.keyCode == 40)) {
            //    $inst = $("#ui-datepicker-div").data("inst");
            //    var annee = $inst.selectedYear;
            //    var mois = parseInt($inst.selectedMonth + 1).toString();
            //    if (mois < 10) { mois = "0" + mois; }
            //    var jour = $inst.selectedDay;
            //    if (jour < 10) { jour = "0" + jour; }
            //    $(event.target).val(annee + "-" + mois + "-" + jour);
            //}


            if (handled) {
                event.preventDefault();
                event.stopPropagation();
            }
        }
    });

    // ajoute un encrage pour redimensionner un élément
    $.fn.csstResize = function (params)
    {
        if ("resize" in document.documentElement.style) return true;

        var $target = $(this);

        $target.each(function ()
        {
            var height = $(this).prop("rows") * parseFloat($(this).css('line-height'));
            $(this).height(height);
            $(this).resizable({ handles: "se", grid: [10000, 1] });
        })
    }
})(jQuery);

var $calendarcellhover = null;

String.prototype.replaceAll = function (search, replacement) {
    var target = this;
    return target.split(search).join(replacement);
};

$(document).ready(function ()
{
    $(".resizable").csstResize();
    $(".datepicker").csstDatepicker();
    $(".datepicker").datepicker("refresh").attr("autocomplete", "off");
    //dayTripper();
    $("#ui-datepicker-div").on("mouseenter", "table.ui-datepicker-calendar tbody tr td", function (event) { cellMouseOver(event); });
    $("#ui-datepicker-div").on("mouseleave", "table.ui-datepicker-calendar tbody tr td", function (event) { $calendarcellhover = null; });
    $(window).resize(function () {
        var field = $(document.activeElement);
        if (field.is('.hasDatepicker')) { field.datepicker('hide').blur(); }
    });

});

function cellMouseOver(event)
{
    event.preventDefault;
    event.stopPropagation;
    $cell = $(event.currentTarget);
    $calendarcellhover = $cell;
    if ($cell.hasClass("ui-datepicker-unselectable"))
    {
        $calendarcellhover = null;
        return false;
    }

    $lastcell = $(".ui-datepicker-days-cell-over");

    if ($cell !== $lastcell)
    {
        if ($lastcell) { $lastcell.removeClass("ui-datepicker-days-cell-over"); }
        $cell.addClass("ui-datepicker-days-cell-over");
        $cell.children().addClass("ui-state-hover");
        $("#ui-datepicker-div").data("inst").selectedDay = $cell.children()[0].innerHTML;
    }
}
