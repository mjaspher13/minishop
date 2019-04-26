/**
 * Lazy Load Images
 */

class Helper {

    static removeFromTable(dataId, dataTableElement) {
        $(dataTableElement).DataTable()
            .row($("tr[data-id = '" + dataId + "']"))
            .remove()
            .draw();
        /**
         * Quick Fixed due to data-id undefined in tr tag
         */
        document.location.reload(true);
    }

    static loadLazyImages() {
        let lazyImages = document.getElementsByClassName("lazy");
        if (lazyImages.length !== 0) {
            setTimeout(() => {
                for (let i = 0; i < lazyImages.length; i++) {
                    let img = new Image();
                    img.src = lazyImages[i].getAttribute("src");
                    img.onload = () => {
                        lazyImages[i].classList.add("loaded");
                    }
                }
            }, 800);
        }
    }

    static generateDataTable(elemId,
        isResponsive = true,
        isPaging = false,
        lengthChange = false,
        searching = false,
        emptyTable = 'No result to display',
        dom = '',
        sum = false,
        row = 0) {
        $("#" + elemId).DataTable({
            responsive: isResponsive,
            paging: isPaging,
            lengthChange: lengthChange,
            searching: searching,
            language: {
                emptyTable: emptyTable
            },
            "drawCallback": () => {
                Helper.loadLazyImages();

            }
        });

    }

    static contentLoader(loaderClass) {
        const loader = document.querySelector(loaderClass);

        if (loader.classList.contains("loaded")) {
            loader.classList.remove("loaded");
        } else {
            setTimeout(() => {
                loader.classList.add("loaded");
            }, 1000);
        }
    }

    static contentLoaderShow(loaderClass) {
        const loader = document.querySelector(loaderClass);

        loader.classList.remove("loaded");
    }

    static convertIntToMoney(rawMoney, currency) {
        var money = rawMoney.toString();
        if (money.length < 2) {
            return `${currency}0.00`;
        } else {
            var firstString = money.substring(0, money.length - 2);
            firstString = firstString > 0 ? firstString : 0;
            var secondString = money.substr(-2);
            return `${currency}${firstString}.${secondString}`;
        }

    }

    static hideOrDisplay(id, type) {
        if (type == "display") {
            $(id).show();
            $(id).removeClass('display-none');
        } else {
            $(id).hide();
            $(id).addClass('display-none');
        }
    }

    static showAlert(colorClass, message) {
        $(".custom-alert").addClass(colorClass + " show")
            .html(message);

        setTimeout(() => {
            $(".custom-alert").removeClass(colorClass + " show");
        }, 3000);
    }

    static getParentElem(elem, selector) {
        for (; elem && elem !== document; elem = elem.parentNode) {
            if (elem.matches(selector)) return elem;
        }
        return null;
    }

    static scrollYMax(elemContainer) {
        var elm = $(elemContainer);
        elm.animate({
            scrollLeft: elm.width()
        }, 800);
    }
}

export default Helper;
