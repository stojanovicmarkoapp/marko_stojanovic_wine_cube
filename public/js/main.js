document.addEventListener("DOMContentLoaded",function(event) {
    var menu = document.querySelector("#navbarTogglerDemo02");
    var menu_links = document.querySelectorAll(".menu_link");
    var menu_buttons = document.querySelectorAll(".menu_button");
    var logo = document.querySelector("#logo");
    $(document).on('click', '.decent_features_p_tag', function () {
        $(this).parent().hide().prev().show();
    });
    $(document).on('click', '.unsatisfactory_features_p_tag', function () {
        $(this).parent().hide().next().show();
    });
    window.onchange=
    $('.features').each(function () {
        var $features_p_tag = $(this).find('p');
        if ($features_p_tag.text().length > 110) {
            var unsatisfactory_features = $features_p_tag.text();
            unsatisfactory_features = unsatisfactory_features.substring(0, 100);
            unsatisfactory_features = unsatisfactory_features += "...";
            $features_p_tag.addClass('decent_features').hide();
            unsatisfactory_features += `<span class="decent_features_p_tag font-weight-bold"><br/><img src="images/soaked.png" alt="Wine cube" class="mr-1"/> Read more</span>`;
            $features_p_tag.append(`<span class="unsatisfactory_features_p_tag font-weight-bold"><br/><img src="images/half_soaked.png" alt="Half-soaked wine cube" class="mr-1"/> Read less</span>`);
            $(this).append(`<p class="unsatisfactory red_wine_color">` + unsatisfactory_features + `</p>`);
        }
    });
    $("body").on("click","#sidebarCollapse",function(){
        var clicks = $(this).data('clicks');
        if (clicks) {
            //$("#topbar_hidden").attr("id","hide_topbar");
            //$("#topline").classList.remove("position-relative");
            //$("#cont").attr("id","content");
            $("#topline").parent().attr("id", "content");
            $("#topline").addClass("topbar");
            $("#sidebar").show(); //classlist.add('d-none');
        } else {
            //alert('prvi_klik');
            $("#sidebar").hide(); //classlist.add('d-none');
            $("#topline").removeClass("topbar");
            $("#topline").parent().attr("id", "cont");
            //$("#topline").classList.add("position-relative");
            //$("#hide_topbar").attr("id","topbar_hidden");
        }
        $(this).data('clicks', !clicks);
    });
    $(document).ready(function(){
        ajax_setup();
        switch_menu_theme();
    });
    function ajax_setup() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content")
            }
        });
    }
        function switch_menu_theme() {
            if (window.innerWidth < 992) {
                menu.classList.remove("white_wine_background_color");
                menu.classList.add("red_wine_background_color");
                menu_links.forEach(menu_link => {
                    menu_link.classList.remove("red_wine_color");
                    menu_link.classList.add("white_wine_color");
                });
                menu_buttons.forEach(menu_button => {
                    menu_button.classList.remove("red_wine_background_color");
                    menu_button.classList.add("white_wine_background_color");
                    menu_button.classList.remove("white_wine_color");
                    menu_button.classList.add("red_wine_color");
                });
            } else {
                menu.classList.remove("red_wine_background_color");
                menu.classList.add("white_wine_background_color");
                menu_links.forEach(menu_link => {
                    menu_link.classList.remove("white_wine_color");
                    menu_link.classList.add("red_wine_color");
                });
                menu_buttons.forEach(menu_button => {
                    menu_button.classList.remove("white_wine_background_color");
                    menu_button.classList.add("red_wine_background_color");
                    menu_button.classList.remove("red_wine_color");
                    menu_button.classList.add("white_wine_color");
                });
            }

        }
    window.onresize = switch_menu_theme;
    // $("body").on("change","#sort",function(){
    //     $.ajax({
    //         url: '/wines',
    //         data: {
    //             'sort' : $("#sort").val()
    //         },
    //         method: 'GET',
    //         dataType: 'json',
    //         success: function (response) {
    //             console.log(response);
    //         }
    //     });
    //});
    $("body").on("keyup","#search",attention);
    $("body").on("click","#unavailables",attention);
    $("body").on("click","#red_wines",attention);
    $("body").on("click","#white_wines",attention);
    $("body").on("change","#price_range",attention);
    $("body").on("change","#label",attention);
    $("body").on("change","#sort",attention);
    $("body").on("change","#price_range",function(){
        $("#top_line").html($("#price_range").val());
    });
    function attention(){
        $.ajax({
            url: '/wines',
            method: 'GET',
            dataType: 'json',
            data: {
                "search" : $("#search").val(),
                "unavailables" : $("#unavailables").is(":checked") ? 1 : 0,
                "max_price" : $("#price_range").val(),
                "label" : $("#label").val(),
                "red_wines" : $("#red_wines").is(":checked") ? 1 : 0,
                "white_wines" : $("#white_wines").is(":checked") ? 1 : 0,
                "sort" : $("#sort").val()
            },
            success: function (response) {
                write_wines(response);
            },
            error:function(xhr){
                console.log(xhr);
            }
        });
    }
    function write_wines(response){
        var write_wines = "";
        if(response['wines'].length==0){
            write_wines = "<p class='white_wine_color mt-5 font-weight-bold'>There are no wines matching your search.</p>";
        }
        else {
            $.each(response['wines'],(index,wine)=> {
                write_wines += `
                <div class="item col-12 col-lg-6 mt-5 mb-5">
        <div class="card">
            <div class="card-header p-0 position-relative">
                <a href="/wines/${wine['id']}" class="zoom d-block white_wine_background_color">
                    <img class="card-img-bottom d-block" src="/images/${wine['image']}"
                         alt="Card image cap">
                </a>
            </div>
            <div class="card-body course-details white_wine_background_color">
                <h3><a href="/wines/${wine['id']}" class="title-big red_wine_color">${wine['name']}</a>
                </h3>
                <div class="features">
                    <p class="mt-3 red_wine_color">${wine['features']}</p>
                </div>
                <div class="manufacturer">
                    <p class="mt-3 red_wine_color"><span class="font-weight-bold">Manufacturer:</span> ${wine['manufacturer']['name']}</p>
                </div>
                <div class="type">
                    <p class="mt-3 red_wine_color"><span class="font-weight-bold">Type: </span>`;
                response['types'].forEach(type=>{
                    if(type.id==wine.variety.type_id ){
                        write_wines+=`${type.name}`;
                    }
                });
                    write_wines+=` wine</p>
                </div>
                <div class="price">
                    <p class="mt-3 red_wine_color"><span class="font-weight-bold">Price:</span> $${wine['price']}</p>
                </div>
                <div class="blog-bottom-info">
                    <a href="/wines/${wine['id']}" class="btn btn-primary btn-style1 red_wine_background_color white_wine_color">Find out more!</a>
                    <div class="course-meta">
                        <div class="meta-item course-students">`;
                        if (wine['available'] == true){
                            write_wines+=`<img src="/images/frozen.png" alt="Frozen wine cube"/>
                            <span class="red_wine_color ml-1 font-weight-bold">Available!</span>`;
                        }
                        else {
                            write_wines += ` <img src="/images/splashed.png" alt="Splashed wine cube"/>
                                <span class="red_wine_color ml-1 font-weight-bold">Not available.</span>`;
                        }
                        write_wines+=`</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            `;
            });
        }
        $("#wines").html(write_wines);
    }
    $("body").on("click","#cart",function(e){
        e.preventDefault();
        var wine_id = $(this).data("wine");
        put_one_item(wine_id);
        $(this).addClass('d-none');
        $("#increase").removeClass('d-none');
        $("#"+wine_id+"_items").removeClass('d-none');
        $("#decrease").removeClass('d-none');
    });
    $("body").on("click","#increase",function(e){
        e.preventDefault();
        var wine_id = $("#cart").data("wine");
        put_one_item(wine_id);
    });
    $("body").on("click",".increase",function(e){
        e.preventDefault();
        var wine_id = $(this).data("wine");
        put_one_item(wine_id);
    });
    $("body").on("click",".buy",function(e){
        e.preventDefault();
        var yes = confirm("Are you sure about the purchase?");
        if(yes){
            var wine_id = $(this).data("wine");
            buy(wine_id);
            take_all_items(wine_id);
            alert("You have successfully made a purchase!");
            location.reload();
        }
    });
    $("body").on("click",".decrease",function(e){
        e.preventDefault();
        var wine_id = $(this).data("wine");
        take_one_item(wine_id);
        setTimeout(() => {
            if(parseInt($("#"+wine_id+"_items").html())<1){
                if(parseInt($("#pin").html())<1){
                    $("#checkout").html("<h3 class='white_wine_color mt-5'>Your cart is empty.</h3>");
                }
                else {
                    write_checkout(wine_id);
                }
            }

        }, "2000");
    });
    $("#changing").submit(function(e){
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
           url: '/user/change',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            dataType: 'json',
            success: function(response){
               alert(response['message']);
               location.reload();
            },
            error: function(reject){
                $(".changing_errors").val();
                var errors = $.parseJSON(reject.responseText);
                $.each(errors.errors,function(key,value){
                    $("#"+key+"_error").text(value);
                });
            }
        });
    });
    $("#reviewing").submit(function(e){
        e.preventDefault();
        var yes = confirm("Are you sure about filling this review? Any of your previous reviews regarding this wine in particular, shall be deleted. Proceed?");
        if(yes) {
            $(".review_error_field").html("");
            $.ajax({
                url: '/review',
                data: {
                    'comment': $("#comment").val(),
                    'wine_id': $("#submit_review").data('wine'),
                    'score': $("#score").val()
                },
                type: 'POST',
                dataType: 'json',
                success: function (response) {
                    alert(response['message']);
                    location.reload();
                },
                error: function(reject){
                    $(".review_errors").val();
                        var errors = $.parseJSON(reject.responseText);
                        $.each(errors.errors,function(key,value){
                            $("#"+key+"_error").text(value);
                        });
                    }

            });
        }
    });
    function write_checkout(wine_id){
        $.ajax({
            url: "/write_checkout",
            method: "GET",
            dataType: "json",
            data: {
                wine_id : wine_id
            },
            success: function(response){
                var checkout = "";
                $.each(response['items'],(index,item)=>{
                    var cost = item.quantity * response['wines'][index].price;
                    checkout+=`
                        <tr class="${index%2==0 ? 'white_wine_background_color red_wine_color' : 'red_wine_background_color white_wine_color'}">
                                    <td align="center"><a class="${index%2==0 ? 'red_wine_color' : 'white_wine_color'}" href="/wines/${item.wine_id}">${response['wines'][index].name}</a></td>
                                    <td align="center"><a href="/wines/${item.wine_id}"><img width="50px" src="/images/${item.wine.image}"/></a></td>
                                    <td align="center">${response['wines'][index].price}</td>
                                    <td id="${item.wine_id}_items" align="center">${item.quantity}</td>
                                    <td align="center">${Math.round(cost*100)/100}</td>
                                    <td align="center"><img className="mr-3" src="/images/${response['wines'][index].available==true ? 'images/frozen.png' : 'images/splashed.png'}"/>${response['wines'][index].wine.available == true ? "Yes!" : "No."}</td>
                                    <td align="center"> <button class="increase btn border_radius_50 ${index%2==0 ? 'red_wine_background_color white_wine_color' : 'white_wine_background_color red_wine_color'}" data-wine="${item.wine_id}"><i class="fa fa-plus" aria-hidden="true"></i></button></td>
                                    <td align="center"> <button class="decrease btn border_radius_50 ${index%2==0 ? 'red_wine_background_color white_wine_color' : 'white_wine_background_color red_wine_color'}" data-wine="${item.wine_id}"><i class="fa fa-minus" aria-hidden="true"></i></button></td>
                                    <td align="center"> <button class="take_back btn border_radius_50 ${index%2==0 ? 'red_wine_background_color white_wine_color' : 'white_wine_background_color red_wine_color'}" data-wine="${item.wine_id}"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                    <td align="center"> <button class="buy btn border_radius_50 ${index%2==0 ? "red_wine_background_color white_wine_color" : "white_wine_background_color red_wine_color" }" ${response['wines'][index].available != true ? "disabled" : ""}  data-toggle="${response['wines'][index].available != true ? "tooltip" : ""}" data-wine="${item.wine_id}"  data-placement="${response['wines'][index].available != true ? "top" : ""}"  title="${response['wines'][index].available != true ? "Not available at the moment." : ""}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button></td>
                                </tr>
                    `;
                });
                $("#items").html(checkout);
            }
        });
    }
    $("body").on("click",".take_back",function(e){
        e.preventDefault();
        var wine_id = $(this).data("wine");
        take_all_items(wine_id);
        setTimeout(() => {
                if(parseInt($("#pin").html())<1){
                    $("#checkout").html("<h3 class='white_wine_color mt-5'>Your cart is empty.</h3>");
                }
                else {
                    write_checkout(wine_id);
                }
        }, "2000");
    });
    $("body").on("click","#decrease",function(e){
        e.preventDefault();
        var wine_id = $("#cart").data("wine");
        take_one_item(wine_id);
        setTimeout(() => {
            if(parseInt($("#"+wine_id+"_items").html())<1){
                $("#"+wine_id+"_items").addClass('d-none');
                $("#increase").addClass('d-none');
                $("#decrease").addClass('d-none');
                $("#cart").removeClass('d-none');
            }
        }, "2000");
    });
    function put_one_item(wine_id){
        $.ajax({
            url: "/put_one_item",
            method: "POST",
            dataType: "json",
            data : {
                wine_id : wine_id
            },
            success: function(response){
                $("#"+wine_id+"_items").html(response['number_of_items']);
                $("#pin").html(response['total_number_of_items']);
                $("#pin").removeClass('d-none');
            }
        });
    }
    function buy(wine_id){
        $.ajax({
            url: "/buy",
            method: "POST",
            dataType: "json",
            data : {
                wine_id : wine_id
            },
            success: function(response){
                if(!response['total_number_of_items']>0){
                    $("#pin").addClass('d-none');
                }
                $("#pin").html(response['total_number_of_items']);
            }
        });
    }
    function take_one_item(wine_id){
        $.ajax({
            url: "/take_one_item",
            method: "POST",
            dataType: "json",
            data : {
                wine_id : wine_id
            },
            success: function(response){
                $("#"+wine_id+"_items").html(response['number_of_items']);
                if(!response['total_number_of_items']>0){
                    $("#pin").addClass('d-none');
                }
                $("#pin").html(response['total_number_of_items']);
            }
        });
    }
    function take_all_items(wine_id){
        $.ajax({
            url: "/take_all_items",
            method: "POST",
            dataType: "json",
            data : {
                wine_id : wine_id
            },
            success: function(response){
                if(!response['total_number_of_items']>0){
                    $("#pin").addClass('d-none');
                }
                $("#pin").html(response['total_number_of_items']);
            }
        });
    }
});
