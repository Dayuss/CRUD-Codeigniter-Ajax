var url = window.location.href;
var param;
// VIEWNA
$(document).ready(function () {
	// if(getHashUrl()['p'] == 'edit') alert('dayuss');

	// MENAMPILKAN SEMUA DATA
	getAll();
	$(window).on('hashchange', function (e) {
		console.log(param);

		// ADD AREA
		if(param == 'add'){
			$("#ID").hide();
			$("#ModalTitle").text("ADD EUY");
			$("#btnSave").click(function () {
				var data = {
					nim		: $("#NIM").val(),
					nama	: $("#NAMA").val(),
					jurusan : $("#JURUSAN").val(),
					alamat	: $("#ALAMAT").val()
				};
				// console.log(data);
				sendData(data,'insert');
				$('#myModal').modal('hide');
				location.hash = '';
				location.reload();

			});
		// EDIT AREA
		}else if(param == 'edit'){

			var id = getHashUrl()['id'];
			$("#ModalTitle").text("EDIT EUY");
			$("#btnSave").text("update");
			getOne(id);
			$("#btnSave").click(function () {
				var data = {
					id: $("#ID").val(),
					nim: $("#NIM").val(),
					nama: $("#NAMA").val(),
					jurusan: $("#JURUSAN").val(),
					alamat: $("#ALAMAT").val()
				};
				// console.log(data);
				sendData(data, 'update');
				$('#myModal').modal('hide');
				location.hash = '';
				location.reload();
			});

		// DELETE AREA
		}else if(param =='del'){
			var ids = getHashUrl()['id'];
			$("#ModalTitle").text("DELETE");
			$("#btnSave").text("delete");
			$("form").hide();
			$("#delabel").text("Are you sure to delete it?");
			$("#btnSave").click(function () {
				var data = { id: ids};
				console.log(data);
				sendData(data, 'delete');
				$('#myModal').modal('hide');
				location.hash = '';
				location.reload();
			});
		}
	});


	$("#btnadd").click(function () {
		urlChanger('p=add');
	});


	// button close modal diklik
	// maka hash dikosongkan dan page di reload
	$("#btnclose").click(function () {
		location.hash = '';
		location.reload();
	});
});

// alert(param);

// MAIN FUNCTION
//get all data
function getAll() {
	$.ajax('http://dayuss-pc/crud_ajax/index.php/getdata/get', {
		type: 'POST',
		dataType: 'json',
		// data: 'action_type=view&'+$("#userForm").serialize(),
		success: function (data) {
			console.log(data);
			var no = 1;
			$.each(data, function (i, item) {
				var del = "p=del&id=" + item.id_mhs;
				var edt = "p=edit&id=" + item.id_mhs;
				$('table tbody').append(
					"<tr>" +
					"<td>" + no + "</td>" +
					"<td>" + item.nim + "</td>" +
					"<td>" + item.nama + "</td>" +
					"<td>" + item.jurusan + "</td>" +
					"<td>" + item.alamat + "</td>" +
					"<td><a href='#' onclick='urlChanger("+'"'+edt+'"'+")' id='btnedit' data-toggle='modal' data-target='#exampleModal' class='btn btn-primary'>Edit</a> "+
					"<a href='#' onclick='urlChanger(" + '"' + del + '"' +")' data-toggle='modal' data-target='#exampleModal' class='btn btn-danger'>Delete</a></td>" +
					"</tr>"
				);
				no++;
			});
		}
	});
}
function getOne(id) {
	$.ajax('http://dayuss-pc/crud_ajax/index.php/getdata/get/'+id, {
		type: 'POST',
		dataType: 'json',
		success: function (data) {
			$.each(data, function (i, item) {
				$("#NIM").val(item.nim);
				$("#ID").val(item.id_mhs);
				$("#NAMA").val(item.nama);
				$("#JURUSAN").val(item.jurusan);
				$("#ALAMAT").val(item.alamat);
				console.log(item);
			});
		}
	});
}
function sendData(datas, apa) {
	$.ajax('http://dayuss-pc/crud_ajax/index.php/getdata/' + apa, {
		type: 'POST',
		dataType: 'json',
		data: datas,
		success: function (e) {
			console.log(e);
		}
	});
}



// FUNCTION FUNCTION PENDUKUNG
function urlChanger(link) {
	location.hash = link;
	param = getHashUrl()['p'];
}

function getHashUrl() {
	var vars = [], hash;
	var hashes = window.location.href.slice(window.location.href.indexOf('#') + 1).split('&');
	for (var i = 0; i < hashes.length; i++) {
		hash = hashes[i].split('=');
		vars.push(hash[0]);
		vars[hash[0]] = hash[1];
	}
	return vars;
}
