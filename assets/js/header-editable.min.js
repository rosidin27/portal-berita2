  function header(id,table,base_url){
    var inputForm = document.getElementById(id);
    var title = inputForm.textContent;
    title = title.replace(/"/g, '');
    title = title.replace(/\\/g, '');
    title = title.replace(/\'/g, "\\'");

    //title = title.replace(/["'\\]/g, "");
    var input = "";
    if(id=="header_a1"){ input = "in-a1"; }
    else if(id=="header_a2"){ input = "in-a2"; }
    else if(id=="header_a3"){ input = "in-a3"; }
    else if(id=="header_b1"){ input = "in-b1"; }
    else if(id=="header_b2"){ input = "in-b2"; }
    else if(id=="header_b3"){ input = "in-b3"; }
    else if(id=="header_c1"){ input = "in-c1"; }
    else if(id=="header_c2"){ input = "in-c2"; }
    else if(id=="header_c3"){ input = "in-c3"; }
    else if(id=="header_d1"){ input = "in-d1"; }
    else if(id=="header_d2"){ input = "in-d2"; }
    else if(id=="header_e1"){ input = "in-e1"; }
    else if(id=="header_e2"){ input = "in-e2"; }

    else if(id=="header_f1"){ input = "in-f1"; }
    else if(id=="header_g1"){ input = "in-g1"; }
    else if(id=="header_g2"){ input = "in-g2"; }
    else if(id=="header_h1"){ input = "in-h1"; }
    else if(id=="header_i1"){ input = "in-i1"; }
    else if(id=="header_i2"){ input = "in-i2"; }

    var press = 'onkeypress="return submitHeaderA(event,\''+input+'\',\''+id+'\',\''+title+'\',\''+table+'\',\''+base_url+'\')"';
    inputForm.innerHTML = '<div class="form-group input-group"><input class="form-control" id=\"'+input+'\" type="text" name="'+id+'" value="'+title+'" '+press+'><span class="input-group-btn"><button class="btn btn-default" onclick="exit(\''+id+'\',\''+title+'\',\''+table+'\',\''+base_url+'\');" style="color:red;padding-top: 8px;padding-bottom: 11px;"><i class="fa fa-close" ></i></button></span></div>';
  }

  function submitHeaderA(e,input,div,tmp,table,base_url){
    //alert(input+","+div+","+tmp+","+table);
    //alert(e.keyCode);
    if (e.keyCode == 13) {
        var value = document.getElementById(input).value;

        $.ajax({
          url  : base_url+"/admin/data-profil/header.php",
          type : "POST",
          datatype : "html",
          data : {field:div, data:value, tb:table},
          beforeSend : function (){
            setTimeout(function () {
                $('#loading_'+div).html("<img src='"+base_url+"/img/loading.gif'>");
            }, 0);
          },
          success : function action(respond){
            //alert(respond);
            if(respond == "ok"){
              alert("Data Tersimpan !");
              document.getElementById(div).innerHTML = '<button class="edit" onclick="header(\''+div+'\',\''+table+'\',\''+base_url+'\');"><i class="icon-pencil"></i></button> '+value+'</div>';
              $('#loading_'+div).html("");
            }
            else{
              //alert(respond);
              document.getElementById(div).innerHTML = '<button class="edit" onclick="header(\''+div+'\',\''+table+'\',\''+base_url+'\');"><i class="icon-pencil"></i></button> '+tmp+'</div>';
              alert("Gagal Tersimpan !");
              $('#loading_'+div).html("");
            }
          }
        });
        return false;
    }
    if(e.keyCode == 34 || e.keyCode == 39 || e.keyCode == 92){ //Agar tidak menginputkan simbol kutip quote ' atau " atau \
      return false;
    }
  }

  function exit(div,tmp,table,base_url){
    document.getElementById(div).innerHTML = '<button class="edit" onclick="header(\''+div+'\',\''+table+'\',\''+base_url+'\');"><i class="icon-pencil"></i></button> '+tmp+'</div>';
    $('#loading_'+div).html("");
  }
