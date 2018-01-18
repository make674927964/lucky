
       $.ajax({
           url: "http://api.jisuapi.com/area/province?appkey=d844b0839ff12da9",
           dataType: "JSONP",
           success: function (obj) {
               let arr = obj.result;
               if (!arr) {
                   return;
               }
               let str = "";
               arr.forEach((val) => {
                   str += `
               <option value="${val.id}">${val.name}</option>
               `
               });
               $("#province").html(function (index, val) {
                   return val + str
               })
               //            console.log(str)
           }
       })
       $("#province").change(function () {
           $("#city").html(" <option value=\"\">请选择城市</option>")
           $("#town").html(" <option value=\"\">请选择县区</option>")
           let id = $(this).val();
           if (!id) {
               return;
           }
           $.ajax({
               url: `http://api.jisuapi.com/area/city?parentid=${id}&appkey=d844b0839ff12da9`,
               dataType: "JSONP",
               success: function (obj) {
                   //            console.log(obj)
                   let arr = obj.result;
                   if (!arr) {
                       return;
                   }
                   let str = "";
                   arr.forEach((val) => {
                       str += `
               <option value="${val.id}">${val.name}</option>
               `
                   });
                   $("#city").html(function (index, val) {
                       return val + str
                   })
               }
           })
       })
       $("#city").change(function () {
           $("#town").html(" <option value=\"\">请选择县区</option>");
           let id = $(this).val();
           if (!id) {
               return;
           }
           $.ajax({
               url: `http://api.jisuapi.com/area/city?parentid=${id}&appkey=d844b0839ff12da9`,
               dataType: "JSONP",
               success: function (obj) {
                   //                console.log(obj)
                   let arr = obj.result;
                   if (!arr) {
                       return;
                   }
                   let str = "";
                   arr.forEach((val) => {
                       str += `
               <option value="">${val.name}</option>
               `
                   });
                   $("#town").html(function (index, val) {
                       return val + str
                   })
               }
           })
       })