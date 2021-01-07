$(function () {

  'use strict';

  


  // function to add Forms to DB---------------------------------------
  function saveWithAjax(route,form,element,input) {

    var formData = new FormData($('#'+form)[0]);
    $.ajax({
      url:route,
      method:'post',
      enctype: 'multipart/form-data',
      data: formData,
      processData:false,
      contentType:false,
      cache:false,

      success:function (data) {
        if(data.status == "1") {
          Snackbar.show({
            pos: "top-center",
            text: data.msg,
            showAction: true,
            duration: 20000,
            actionTextColor: 'blue',
            backgroundColor: "#d4edda",
            textColor: '#155724',
          })
          $(element).html('');
          $(input).val('');
        } else {
          Snackbar.show({
            pos: "top-center",
            text: data.msg,
            showAction: true,
            duration: 20000,
            actionTextColor: 'blue',
            backgroundColor: "#dc3545",
            textColor: '#fff',
          })

        }
      },

      error:function (data) {
        var response = JSON.parse(data.responseText);
        
        $.each(response.errors, function (key, val) {
          $("#"+key+"Errors").text(val);
        })
      }


    })

    return true;
  }
  // End function to add form ---------------------------------------------

  // function to Edit Slider ---------------------------------------
  function editWithAjax(route,form) {

    var formData = new FormData($('#'+form)[0]);
    $.ajax({
      url:route,
      method:'post',
      enctype: 'multipart/form-data',
      data: formData,
      processData:false,
      contentType:false,
      cache:false,

      success:function (data) {
        if(data.status == "1") {
          Snackbar.show({
            pos: "top-center",
            text: data.msg,
            showAction: true,
            duration: 20000,
            actionTextColor: 'blue',
            backgroundColor: "#d4edda",
            textColor: '#155724',
          })
         
        } else {
          Snackbar.show({
            pos: "top-center",
            text: data.msg,
            showAction: true,
            duration: 20000,
            actionTextColor: 'blue',
            backgroundColor: "##dc3545",
            textColor: '#155724',
          })

        }
      },

      error:function (data) {
        var response = JSON.parse(data.responseText);
        
        $.each(response.errors, function (key, val) {
          $("#"+key+"Errors").text(val);
        })
      }


    })

    return true;
  }
  // End function to Edit Slider  ---------------------------------------------


  // start function to delete items with ajax ------------------------------------
  function deleteWithAjax(route,id,token) {

    bootbox.confirm("Are you sure?", function(result){
      if (result === true) {
          $.ajax({
            url: route,
            type: 'post',
            dataType: "JSON",
            data: {
            "id": id,
            "_token": token,
            },
            success: function (data)
            {
              if(data.status == "1") {
                Snackbar.show({
                pos: "top-center",
                text: data.msg,
                showAction: true,
                duration: 20000,
                actionTextColor: 'blue',
                backgroundColor: "#d4edda",
                textColor: '#155724',
                })
                $("#" + id).fadeOut(1500);
              } else {
                Snackbar.show({
                pos: "top-center",
                text: data.msg,
                showAction: true,
                duration: 20000,
                actionTextColor: 'blue',
                backgroundColor: "##dc3545",
                textColor: '#155724',
                })
              }
            }
          
          });
        }
      });
      
    
  }
  // End function to delete items with ajax ------------------------------------

  // ***********************
  // send contact form with ajax
  $("#btnToSubmit").on('click',function (e) {
    e.preventDefault();
    var countryCode = $('.iti__active span.iti__dial-code').html();
    $("#inquireForm").append(`<input name="countryKey" type="hidden" value="`+countryCode+`">`);
    saveWithAjax('/bookWithus','inquireForm','.errorClass','.chooseus-main') ;

    // console.log();
  })
  // ***********************

  // ***********************
  // send Comment form with ajax
  $("#comment-Id-Form-Send-9G6B8").on('submit',function (e) {
    e.preventDefault();
    
    saveWithAjax('/saveComment','comment-Id-Form-Send-9G6B8','.errorClass','.comment') ;

    // console.log();
  })
  // ***********************



  //****************************************************************************** */
  // start slider
  // slider add form
  $("#sliderUpload").on('submit',function (e) {
    e.preventDefault();
    saveWithAjax('/dashboad/saveHomepage','sliderUpload','.errorClass','.sliderUpload-main') ;
  })
  //seo tages add form
  $("#SeoUpload").on('submit',function (e) {
    e.preventDefault();
    saveWithAjax('/dashboad/seoUpdate','SeoUpload','.errorClassSeo','.sliderUpload-mainSeo') ;
  })

  // edit slider
  $("#editSlider").on('submit',function (e) {
    e.preventDefault();
    editWithAjax('/dashboad/sliderEdit','editSlider');
  })

  //slider delete with ajax
  $(".deleteSlider").on('click',function (e) {
    e.preventDefault();
    var id = $(this).data("id");
    var token = $(this).data("token");
    deleteWithAjax("/dashboad/slider/delete",id,token);
  })

  //**************************************************************************** */

  // start about
  // edit About us section
  $("#aboutUsEdit").on('submit',function (e) {
    e.preventDefault();
    editWithAjax('/dashboad/aboutUs/edit','aboutUsEdit');
  })


  //**************************************************************** */
  //start programs

  //add new programe
  $("#programAdd").on('submit',function (e) {
    e.preventDefault();
    saveWithAjax('/dashboad/programs/storedata','programAdd','.errorClass','.programAdd-main') ;
  })

  //edit program
  $("#programEdit").on('submit',function (e) {
    e.preventDefault();
    editWithAjax('/dashboad/programs/programEdit','programEdit');
  })

  // delete program
  $(".deleteProgram").on('click',function (e) {
    e.preventDefault();
    var id = $(this).data("id");
    var token = $(this).data("token");
    deleteWithAjax("/dashboad/programs/programDelete",id,token);
  })
//************************************************************************* */

  // start teachers add and edit 
  //add
  
  //add new teacher
  $("#teacherAdd").on('submit',function (e) {
    e.preventDefault();
    saveWithAjax('/dashboad/teachers/addNewJx','teacherAdd','.errorClass','.teacher-main') ;
  });

  //edit teacher
  $("#teacherEdit").on('submit',function (e) {
    e.preventDefault();
    editWithAjax('/dashboad/teachers/editJx','teacherEdit');
  })

  // delete program
  $(".deleteTeacher").on('click',function (e) {
    e.preventDefault();
    var id = $(this).data("id");
    var token = $(this).data("token");
    deleteWithAjax("/dashboad/teachers/deleteJx",id,token);
  })
  /**************************************************************************** */

  // start clients add and edit 
  //add
  
  //add new clients
  $("#clientAdd").on('submit',function (e) {
    e.preventDefault();
    saveWithAjax('/dashboad/clients/addNewJx','clientAdd','.errorClass','.client-main') ;
  });

  //edit clients
  $("#clientEdit").on('submit',function (e) {
    e.preventDefault();
    editWithAjax('/dashboad/clients/editJx','clientEdit');
  })

  //edit bg of section clients
  $("#clientBgEdit").on('submit',function (e) {
    e.preventDefault();
    if(editWithAjax('/dashboad/clients/editBgJx','clientBgEdit')){
      $(".closeModelDamiy").click();
    }
  })

  // delete clients
  $(".deleteClient").on('click',function (e) {
    e.preventDefault();
    var id = $(this).data("id");
    var token = $(this).data("token");
    deleteWithAjax("/dashboad/clients/deleteJx",id,token);
  });
  //***************************************************************************** */

  // start choose us add and edit 
  //add
  
  //add new clients
  $("#chooseusAdd").on('submit',function (e) {
    e.preventDefault();
    saveWithAjax('/dashboad/chooseus/addNewJx','chooseusAdd','.errorClass','.chooseus-main') ;
  });

  //edit clients
  $("#chooseusEdit").on('submit',function (e) {
    e.preventDefault();
    editWithAjax('/dashboad/chooseus/editJx','chooseusEdit');
  })

  //edit bg of section clients
  $("#chooseusBgEdit").on('submit',function (e) {
    e.preventDefault();
    if(editWithAjax('/dashboad/chooseus/editBgJx','chooseusBgEdit')){
      $(".closeModelDamiy").click();
    }
  })

  // delete clients
  $(".deleteChooseus").on('click',function (e) {
    e.preventDefault();
    var id = $(this).data("id");
    var token = $(this).data("token");
    deleteWithAjax("/dashboad/chooseus/deleteJx",id,token);
  });
  //******************************************************************* */

  //start Plans

  //add new plan
  $("#planAdd").on('submit',function (e) {
    e.preventDefault();
    saveWithAjax('/dashboad/plans/storedata','planAdd','.errorClass,.note-editable','.plan-main') ;
  })

  //edit program
  $("#planEdit").on('submit',function (e) {
    e.preventDefault();
    editWithAjax('/dashboad/plans/planEdit','planEdit');
  })

  // delete Plan
  $(".deletePlan").on('click',function (e) {
    e.preventDefault();
    var id = $(this).data("id");
    var token = $(this).data("token");
    deleteWithAjax("/dashboad/plans/planDelete",id,token);
  })
  //*************************************************************/

  // staff member
  
  $("#staffAdd").on('submit',function (e) {
    e.preventDefault();
    saveWithAjax('/dashboad/staff/addNew','staffAdd','.errorClass','.staff-main') ;
  })
  
  //edit staff
  $("#staffEdit").on('submit',function (e) {
    e.preventDefault();
    editWithAjax('/dashboad/staff/editOne','staffEdit');
  })


  // delete staff
  $(".deleteMember").on('click',function (e) {
    e.preventDefault();
    var id = $(this).data("id");
    var token = $(this).data("token");
    deleteWithAjax("/dashboad/staff/staffDelete",id,token);
  })


  //******************************************************************** */
  //Blogs
  //add new blog
  $("#blogAdd").on('submit',function (e) {
    e.preventDefault();
    saveWithAjax('/dashboad/blogs/storeAjax','blogAdd','.errorClass','.plan-main') ;
  })

  //edit blog
  $("#blogEdit").on('submit',function (e) {
    e.preventDefault();
    editWithAjax('/dashboad/blog/editAjax','blogEdit');
  })


  //delete blog
  $(".deleteblog").on('click',function (e) {
    e.preventDefault();
    var id = $(this).data("id");
    var token = $(this).data("token");
    deleteWithAjax("/dashboad/blog/deleteAjax",id,token);
  })

  //delete comment
  $(".deletecomment").on('click',function (e) {
    e.preventDefault();
    var id = $(this).data("id");
    var token = $(this).data("token");
    deleteWithAjax("/dashboad/comment/deleteAjax",id,token);
  })
});


// to make flag in phone number input
var input = document.querySelector("#phone");
  window.intlTelInput(input, {
    // any initialisation options go here
  });