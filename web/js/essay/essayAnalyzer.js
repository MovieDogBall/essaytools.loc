$(document).ready(function () {


    $(".tabs").lightTabs();
    $(".result").hide();
    $('#table-found-words').DataTable(
        {
            dom: 'T<"clear">lfrtip',
            "tableTools": {
                "aButtons": [
                    {
                        "sExtends": "copy",
                        "sButtonText": "Copy to clipboard",
                        "mColumns": [0]
                    }
                ]
            }
        });

    $('#table-not-found-words').DataTable(
        {
            dom: 'T<"clear">lfrtip',
            "tableTools": {
                "aButtons": [
                    {
                        "sExtends": "copy",
                        "sButtonText": "Copy to clipboard",
                        "mColumns": [0]
                    }
                ]
            }
        });
});


(function($){
    jQuery.fn.lightTabs = function(){

        var createTabs = function(){
            var tabs = this;
            var i = 0;

            showPage = function(i){
                $('').hide();
                $(tabs).children("#tab-"+i).children(".row").show();
                $('#ulTab').children("li").removeClass("active");
                $('#ulTab').children("li").eq(i).addClass("active");
            }

            showPage(0);

            $('#ulTab').children("li").each(function(index, element){
                $(element).attr("data-page", i);
                i++;
            });

            $('#ulTab').children("li").click(function(){
                showPage(parseInt($(this).attr("data-page")));
            });
        };
        return this.each(createTabs);
    };
})(jQuery);

function essayAnalyzer() {
    /**
     * Clear our table, graphs, textarea
     */

    $('#table-found-words').DataTable().clear().draw();
    $('#table-not-found-words').DataTable().clear().draw();
    $('#table-analyze-sentences').DataTable().clear().draw();

    /**
     * AJAX code to submit form.
     */

    $.ajax({
        type: "POST",
        url: '/web/index.php?r=site%2Fanalyzer',
        data: {
            ownUrl: $('').val(),
            owntext: $('#text-tab').val(),
            _csrf: '<?=Yii::$app->request->getCsrfToken()?>'
        },
        cache: false,
        success: function (data) {
            var obj = jQuery.parseJSON(data);

            if (obj.success == true) {
                //Draw table with founded words
                jQuery.each(obj.resultPositive, function (i, val) {
                    $('#table-found-words').DataTable().row.add([i, val]).draw();
                    words.push(i);
                });

                // Draw table with not-founded words
                jQuery.each(obj.resultNegative, function (i) {
                    $('#table-not-found-words').DataTable().row.add([i]).draw();
                });

                numSent = [];
                senten = [];
                //Draw analyze sentences table
                jQuery.each(obj.analyzeSentences, function (num, sentences) {
                    numSent.push(num);
                    senten.push(sentences);
                    $('#table-analyze-sentences').DataTable().row.add([num, sentences]).draw();
                });

                average = [];
                mediana = [];
                //Get average and median value for line chart
                jQuery.each(obj.averageAndMediana, function (ave, med) {
                    jQuery.each(numSent, function () {
                        average.push(ave);
                        mediana.push(med);
                    });
                });


            } else {
                jQuery.each(obj.errors, function (i) {
                    alert(i);
                });
            }

        }
    });

    return false;
}

