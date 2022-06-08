/******/ (() => { // webpackBootstrap
/******/    "use strict";
/******/    
/******/    
/******/ })()


$(function () {
    $('.fav_button').on('click', function (e) {
          e.stopPropagation();
          var val = $(this).val();
          var product = $(this).attr('id');
          var elem = $(this);
          $.ajax({
            url: '/favo',
            type: 'POST',
            dataType: 'json',
            data: {
              fav: val,
              product_id: product
            },
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') //④
      
            }
          }).done(function (json) {
            //成功した時の処理
            console.log(json);
      
            if (json.fav == 1) {
              elem.css('color', 'red');
            } else {
              elem.css('color', 'black');
            }
          }).fail(function (json) {//失敗した時の処理
          });
          return false;
        });
    
        $('.add_button').on('click', function () { 
            let ca=[];
            let a = $(this).val();
            ca.push(a);
            let value = ca;
            console.log(ca);
            if(a == 1) {
                $('input[name="val1"]').val([1],a[0])
            }
            else if(a == 2) {
                $('input[name="val2"]').val([2],a[0])
            }
            else if(a == 3) {
                $('input[name="val3"]').val([3],a[0])
            }
            else if(a == 4) {
                $('input[name="val4"]').val([4],a[0])
            }
            else if(a == 5) {
                $('input[name="val5"]').val([5],a[0])
            }
            else if(a == 6) {
                $('input[name="val6"]').val([6],a[0])
            }
            else if(a == 7) {
                $('input[name="val7"]').val([7],a[0])
            }
            else if(a == 8) {
                $('input[name="val8"]').val([8],a[0])
            }
    
        })
    
      });
    