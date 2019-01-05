  function showblockstu() {
    document.getElementById('entresection').style.display = "none";
    document.getElementById('secondques').style.display = "none";
    document.getElementById('stusection').style.display = "block";
  }

  function showblockent() {
    document.getElementById('stusection').style.display = "none";
    document.getElementById('entresection').style.display = "block";
    document.getElementById('secondques').style.display = "block";
  }

  function viewDetail() {
    var num = document.getElementById('num').value;
    $('#entrepreneurFounder').empty();
    for(var i=0;i<num;i++) {
    $('#entrepreneurFounder').append('<div class="form-group col-md-6"><label class="control-label col-md-12">Name of Co-Founder '+ (i+1) +':</label><div class="controls col-md-12 "><input class="form-control" style="margin-bottom: 10px" type="text" placeholder="Co-founder '+(i+1)+' name" name="cofounderName[]" /></div></div><div class="form-group col-md-6"><label class="col-md-12">Contact Number:</label><div class="col-md-12"><input class="form-control" type="tel" name="cofounderContact[]" style="margin-bottom: 10px"/></div></div>');
    }
  }
