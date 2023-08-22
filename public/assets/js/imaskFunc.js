function maskPhone(element) {
    var elementPhone = document.getElementById(element);
    var maskOptionsPhone = { mask: '(00) 0000-0000', };
    var maskPhone = IMask(elementPhone, maskOptionsPhone);

    elementPhone.addEventListener("keyup", () => {
        if (elementPhone.value.length == 15) {
            maskPhone.updateOptions({ mask: '(00) 00000-0000' });
        } else {
            maskPhone.updateOptions({ mask: '(00) 0000-00000' });
        }
    })
}

function maskCNPJ(element) {
    var elementCNPJ = document.getElementById(element);
    var maskOptionsCNPJ = {
        mask: '00.000.000/0000-00'
    };
    var maskCNPJ = IMask(elementCNPJ, maskOptionsCNPJ);
}

function maskCPF(element) {
    var elementCPF = document.getElementById(element);
    var maskOptionsCPF = {
        mask: '000.000.000-00'
    };
    var maskCNPJ = IMask(elementCPF, maskOptionsCPF);
}

function maskDataNasc(element) {
    var element = document.getElementById(element);
    var momentFormat = 'DD/MM/YYYYY';
    var momentMask = IMask(element, {
        mask: Date,
        pattern: momentFormat,
        min: new Date(1900, 0, 1),
        max: new Date(2030, 0, 1),
        // format: function (date) {
        //     return moment(date).format(momentFormat);
        // },
        // parse: function (str) {
        //     return moment(str, momentFormat);
        // },

        blocks: {
            YYYY: {
                mask: IMask.MaskedRange,
                from: 1900,
                to: 2030
            },
            MM: {
                mask: IMask.MaskedRange,
                from: 1,
                to: 12
            },
            DD: {
                mask: IMask.MaskedRange,
                from: 1,
                to: 31
            }
        }
    });
}