/*
 *  Project: Fontsize
 *  Description: Fontsize 
 *  Author: Airton Vancin Junior
 *  License:
 */

// o ponto-e-vírgula antes de invocar a função é uma prática segura contra scripts
// concatenados e/ou outros plugins que não foram fechados corretamente.
;(function ( $, window, document, undefined ) {

    // 'undefined' é usado aqui como a variável global 'undefined', no ECMAScript 3 é
    // mutável (ou seja, pode ser alterada por alguém). 'undefined' não está sendo
    // passado na verdade, assim podemos assegurar que o valor é realmente indefinido.
    // No ES5, 'undefined' não pode mais ser modificado.

    // 'window' e 'document' são passados como variáveis locais ao invés de globais,
    // assim aceleramos (ligeiramente) o processo de resolução e pode ser mais eficiente
    // quando minificado (especialmente quando ambos estão referenciados corretamente).

    // Cria as propriedades padrão
    var pluginName = "fontsize",
        defaults = {
            tags : "body, p, h1, h2, h3, h4, h5, blockquote",
            limit : 3,
            interval: 1
        };

    // O verdadeiro construtor do plugin
    function Plugin( element, options ) {
        this.element = element;

        // jQuery tem um método 'extend' que mescla o conteúdo de dois ou
        // mais objetos, armazenando o resultado no primeiro objeto. O primeiro
        // objeto geralmente é vazio já que não queremos alterar os valores
        // padrão para futuras instâncias do plugin
        this.options = $.extend( {}, defaults, options );

        this._defaults = defaults;
        this._name = pluginName;

        this.init();
    }

    Plugin.prototype = {

        init: function() {
            // Coloque a lógica de inicialização aqui
            // Você já possui acesso ao elemento do DOM e as opções da instância
            // exemplo: this.element e this.options

            var limit = this.options.limit;
            var tags = this.options.tags;
            var interval = this.options.interval;

            $(".increase").click(function(e){   
                e.preventDefault();     
                var dataIncrease = $(this).data('size');
                var dataDecrease = $(".decrease").data('size');

                if( dataIncrease == limit){
                    dataIncrease = limit +1;
                }else{      
                    dataIncrease++;
                    $(this).attr('data-size', dataIncrease);
                    $(this).data('size', dataIncrease);   
                }

                if(dataDecrease > 0){
                    dataDecrease = 0;
                    $(".decrease").attr('data-size', dataDecrease);
                    $(".decrease").data('size', dataDecrease);
                }

                if(dataIncrease <= limit){                      
                    $(tags).each(function() {
                        var fontSize = $(this).css("font-size");
                        var fontSize = parseFloat(fontSize);
                        var newFontSize = fontSize + interval+'px';
                        $(this).animate({"font-size": newFontSize});
                    });         
                }
            });

            $(".decrease").click(function(e){
                e.preventDefault();     
                var dataDecrease = $(this).data('size');
                var dataIncrease = $(".increase").data('size');

                if( dataDecrease == limit){
                    dataDecrease = limit +1;
                }else{      
                    dataDecrease++;
                    $(this).attr('data-size', dataDecrease);
                    $(this).data('size', dataDecrease);   
                }

                if(dataIncrease > 0){
                    dataIncrease = 0;
                    $(".increase").attr('data-size', dataIncrease);
                    $(".increase").data('size', dataIncrease);
                }

                if(dataDecrease <= limit){                      
                    $(tags).each(function() {
                        var fontSize = $(this).css("font-size");
                        var fontSize = parseFloat(fontSize);
                        var newFontSize = fontSize - interval+'px';
                        $(this).animate({"font-size": newFontSize});
                    });         
                }

            });

            console.log(this);
        },

        yourOtherFunction: function(el, options) {
            // alguma lógica
        }
    };

    // Um invólucro realmente leve em torno do construtor,
    // prevenindo contra criação de múltiplas instâncias
    $.fn[pluginName] = function ( options ) {
        return this.each(function () {
            if (!$.data(this, "plugin_" + pluginName)) {
                $.data(this, "plugin_" + pluginName, new Plugin( this, options ));
            }
        });
    };

})( jQuery, window, document );