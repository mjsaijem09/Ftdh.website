//by reagz: automatic parsing of dropdownlist or select list option 

function selectListChange(element, url, param, defaultOptionName) 
{


    var elementName = "#" + element;

    if ($("#" + element).length == 0) 
    {
        elementName = "." + element;
    }

    $(elementName + "> option").remove();
    $(elementName).append($("<option />").val("").text("---" + defaultOptionName + "---"));


     $.ajax({
        url: url,
        data: param,
        type: "GET", 
        dataType: "json",
        async:false,
        success: function (data) 
        {
                $(elementName).empty();
                // $(elementName).append('<option value=""></option>');
                $.map(data, function (item) 
                {      
                        $(elementName).append($("<option/>").val(item.value).text(item.text));
                });
        }
       
    }); 



    $(elementName).trigger("change");
}

function selectListRoomChange(element, url, param, defaultOptionName) 
{


    var elementName = "#" + element;

    if ($("#" + element).length == 0) 
    {
        elementName = "." + element;
    }

    $(elementName + "> option").remove();
    $(elementName).append($("<option />").val("").text("---" + defaultOptionName + "---"));


     $.ajax({
        url: url,
        data: param,
        type: "GET", 
        dataType: "json",
        async:false,
        success: function (data) 
        {
                $(elementName).empty();
                $(elementName).append('<option value="" selected style="display:none">Room</option>');
                $.map(data, function (item) 
                {      
                        $(elementName).append($("<option/>").val(item.value).text(item.text));
                });
        }
       
    }); 



    $(elementName).trigger("change");
}

function selectListSubjectChange(element, url, param, defaultOptionName) 
{


    var elementName = "#" + element;

    if ($("#" + element).length == 0) 
    {
        elementName = "." + element;
    }

    $(elementName + "> option").remove();
    $(elementName).append($("<option />").val("").text("---" + defaultOptionName + "---"));


     $.ajax({
        url: url,
        data: param,
        type: "GET", 
        dataType: "json",
        async:false,
        success: function (data) 
        {
                $(elementName).empty();
                $(elementName).append('<option value="" selected style="display:none">Subject</option>');
                $.map(data, function (item) 
                {      
                        $(elementName).append($("<option/>").val(item.value).text(item.text));
                });
        }
       
    }); 



    $(elementName).trigger("change");
}


function selectDataChange(element, url, param, defaultOptionName) 
{


    
    var elementName = "#" + element;

    if ($("#" + element).length == 0) 
    {
        elementName = "." + element;
    }

    $(elementName + "> option").remove();
    $(elementName).append($("<option />").val("").text("---" + defaultOptionName + "---"));


     $.ajax({
        url: url,
        data: param,
        type: "GET", 
        dataType: "json",
        async:false,
        success: function (data) 
        {
                $(elementName).empty();
                $.map(data, function (item) 
                {
                        $(elementName).append($("<option/>").val(item.value).text(item.text+" "+item.text1));
                        
                });
        }
       
    }); 



    $(elementName).trigger("change");
}


/*function selectListChange(element, url, defaultOptionName) {

   
    var elementName = "#" + element;

    if ($("#" + element).length == 0) {
        elementName = "." + element;
    }

    $(elementName + "> option").remove();
    $(elementName).append($("<option />").val("").text("---" + defaultOptionName + "---"));

    $.ajax({
        url: url, type: "POST", dataType: "json",async:false,
        success: function (response) {
            if (response.success == true)
            {
                $.map(response.data, function (item) {
                    if (item.value == response.selected) {
                        $(elementName).append($("<option selected />").val(item.value).text(item.text));
                    }
                    else {
                        $(elementName).append($("<option />").val(item.value).text(item.text));
                    }
                });
            }
        }
    });


    $(elementName).trigger("change");
}*/


    function selectListChangeMultiParam(element, url,param, defaultOptionName) {

        var elementName = "#" + element;

        if ($("#" + element).length == 0) {
            elementName = "." + element;
        }

        $(elementName + "> option").remove();
        $(elementName).append($("<option />").val("").text("---" + defaultOptionName + "---"));

        $.ajax({
            url: url, type: "POST", dataType: "json", async: false, data: JSON.stringify(param),
            contentType: "application/json; charset=utf-8",

            success: function (response) {
                if (response.success == true) {
                    $.map(response.data, function (item) {
                        if (item.value == response.selected) {
                            $(elementName).append($("<option selected />").val(item.value).text(item.text));
                        }
                        else {
                            $(elementName).append($("<option />").val(item.value).text(item.text));
                        }
                    });
                }
            }
        });

        $(elementName).trigger("change");
/*

        var elementName = "#" + element;
        if ($("#" + element) == null) {
            elementName = "." + element;
        }
        $(elementName + "> option").remove();
        $(elementName).append($("<option />").val("").text("--" + defaultOptionName + "--"));


        $.ajax({
            url: url,
            type: 'POST',
            data: JSON.stringify(param),
            contentType: "application/json; charset=utf-8"
        })
         .done(function (response) {
             var data = $.parseJSON(response);
             for (i = 0; i < data.length; i++) {
                 $(elementName).append($("<option />").val(data[i].Value).text(data[i].Text));
             }
         });

       /* $.get(url).done(function (response) {
            var data = $.parseJSON(response);
            for (i = 0; i < data.length; i++) {
                $(elementName).append($("<option />").val(data[i].Value).text(data[i].Text));
            }
        });
        */

    }
