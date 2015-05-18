!function ($) {
  'use strict';

  $(function () {

    // Kill links
    $('.container-fluid [href=#]').click(function (e) {
      e.preventDefault()
    })
    
    //sidenav
    $(".nav-sidenav > li").on("show.bs.collapse", function () {
	$(this).addClass("sidenav-active-background");
    });
    $("li").on("hide.bs.collapse", function (e) {
	e.stopPropagation();
	$(this).removeClass("sidenav-active-background");
    });

    $(".input-group.date").datepicker({
	autoclose: true,
	todayHighlight: true,
	toggleActive: true
    });

    //add row
    var i=1;
    var j=1;
    $("#add_row").click(function(){
	$('#isi'+i).html("<td>"+ (i+1) +"</td><td><input name='cust"+i+"' type='text' placeholder='Customer'  class='form-control input-md'></td><td><input name='spec"+i+"' type='text' placeholder='Spec' class='form-control input-md'></td><td><input name='matawal"+i+"' type='text' placeholder='TxLxP' class='form-control input-md'></td><td><input name='qtya"+i+"' type='text' placeholder='Qty' class='form-control input-md'></td><td><input name='uk"+i+"' type='text' placeholder='TxLxP' class='form-control input-md'></td><td><input name='qtyb"+i+"' type='text' placeholder='Qty' class='form-control input-md'></td><td><input name='mp"+i+"' type='text' placeholder='MPower' class='form-control input-md'></td><td><input name='wkt"+i+"' type='text' placeholder='Waktu' class='form-control input-md'></td><td><input name='ok"+i+"' type='text' placeholder='OK' class='form-control input-md'></td><td><input name='ng"+i+"' type='text' placeholder='NG' class='form-control input-md'></td><td><input name='rwk"+i+"' type='text' placeholder='Rework' class='form-control input-md'></td><td><input name='tot"+i+"' type='text' placeholder='Total' class='form-control input-md'></td><td><input name='ket"+i+"' type='text' placeholder='Ket' class='form-control input-md'></td>");

	$('#myTable').append('<tr id="isi'+(i+1)+'"></tr>');
	i++; 
    });
    $("#del_row").click(function(){
	if(i>1){
		 $("#isi"+(i-1)).html('');
		 i--;
		 }
	});

    $("#add_row2").click(function(){
	$('#st'+j).html("<td>"+ (j+1) +"</td><td><input type='text' name='part"+j+"' placeholder='Part No' class='form-control input-md'/></td><td><input type='text' name='up"+j+"'  placeholder='Urutan Proses' class='form-control in input-md'/></td><td><input type='text' name='proses"+j+"' placeholder='Proses' class='form-control input-md'/></td><td><input type='text' name='ok"+j+"' placeholder='Ok' class='form-control input-md'/></td><td><input type='text' name='ng"+j+"' placeholder='NG' class='form-control input-md'/></td><td><input type='text' name='rwk"+j+"' placeholder='Rework' class='form-control input-md'/></td><td><input type='text' name='start"+j+"' placeholder='Start' class='form-control'/></td><td><input type='text' name='fin"+j+"' placeholder='Finish' class='form-control input-md'/></td><td><input type='text' name='gross"+j+"' placeholder='Gross' class='form-control input-md'/></td><td><input type='text' name='netto"+j+"' placeholder='Netto' class='form-control input-md'/></td><td><input type='text' name='dc"+j+"' placeholder='DC' class='form-control input-md'/></td><td><input type='text' name='sett"+j+"' placeholder='' class='form-control input-md'/></td><td><input type='text' name='ambil"+j+"' placeholder='Ambil' class='form-control input-md'/></td><td><input type='text' name='buang"+j+"' placeholder='Buang' class='form-control input-md'/></td><td><input type='text' name='qlt"+j+"' placeholder='Quality' class='form-control input-md'/></td><td><input type='text' name='die"+j+"'  placeholder='Die' class='form-control input-md'/></td><td><input type='text' name='elec"+j+"'  placeholder='Electrical' class='form-control input-md'/></td><td><input type='text' name='crane"+j+"'  placeholder='Crane' class='form-control input-md'/></td><td><input type='text' name='mat"+j+"'  placeholder='Matl' class='form-control input-md'/></td><td><input type='text' name='pal"+j+"'  placeholder='Pallet' class='form-control input-md'/></td><td><input type='text' name='fork"+j+"'  placeholder='Fork' class='form-control input-md'/></td><td><input type='text' name='brief"+j+"'  placeholder='Briefing' class='form-control input-md'/></td><td><input type='text' name='5s"+j+"'  placeholder='5s' class='form-control input-md'/></td><td><input type='text' name='to"+j+"'  placeholder='Try out' class='form-control input-md'/></td><td><input type='text' name='ls"+j+"'  placeholder='Line Stop' class='form-control input-md'/></td>");

	$('#myTable2').append('<tr id="st'+(j+1)+'"></tr>');
	j++; 
    });
    $("#delete_row").click(function(){
	if(j>1){
		 $("#st"+(j-1)).html('');
		 j--;
		 }
	});
    
  })
}(jQuery);
