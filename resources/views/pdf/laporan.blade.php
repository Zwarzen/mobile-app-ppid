<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>Permohonan</title>
	<link href="style.css" rel="stylesheet">
</head>

<body lang="en-US" link="#000080" vlink="#800000" dir="ltr">
	<div id="TextSection" dir="ltr">
		<h3 class="western" style="margin-left: 1.7in; margin-top: 0.04in; line-height:0.4; margin-left:200px">
			<span class="sd-abs-pos" style="position: absolute; top: -5px; left: 70px; width: 67px;"><img src="image/pdflogo.jpeg" width="67" height="95" />
			</span>PEMERINTAH
			KABUPATEN BANYUWANGI
		</h3>
		<p class="western text-center" style="line-height: 0.21in; margin-left: 1.7in; margin-right: 0.9in; margin-top: 0in; line-height:0.4;text-align:center;">
			<b>SEKRETARIAT
				DAERAH</b>
		</p>
		<p class="western text-center" style="line-height: 0.19in; margin-left: 1.7in; margin-right: 0.9in; line-height:0.4;text-align:center;">
			Jl.
			Jend.A.Yani No. 100 Telp.425001 - 425011</p>
		<p class="western text-center" style="margin-left: 1.7in; margin-right: 0.9in; margin-top: 0in;text-align:center; line-height:0.4;">
			<a href="http://www.banyuwangikab.go.id/"><u>http://www.banyuwangikab.go.id</u>
				<a href="mailto:setda@banyuwangikab.go.id">E-mail:setda@banyuwangikab.go.id</a>
		</p>
		<p class="western text-center" style="margin-left: 1.7in; margin-right: 0.9in; margin-top: 0in; line-height:0.4;text-align:center;">
			<b>BANYUWANGI</b>
		</p>
		<div id="Section2" dir="ltr"><span class="sd-abs-pos" style="position: absolute; top: 130px; left:-10px; width: 731px ;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAt4AAAADCAYAAACkqwiHAAAAQElEQVR4nO3WIQ7AMAwEwYD82X5C/GpHBQXhrSpVM2zZwZvdPS5VFQMAAHhcRNS8IzPXl2MAAOCvjuMNAAC8ZwMaiAroFJSVnwAAAABJRU5ErkJggg==" name="Shape1" alt="Shape1" align="left" width="731" />
			</span>

			<h3 class="western text-center" style="text-align: center"><u>FORMULIR
					PERMOHONAN INFORMASI</u></h3>
			<p class="western text-center" style=" text-align:center; line-height:0.5;">
				No.
				Pendaftaran * : {{$show->id}} /PPID/ {{$newDate = date("d m Y", strtotime($show->date));}}</p>
			<p class="western text-center" style="margin-top: 0in">

			</p>
			<table width="628" cellpadding="7" cellspacing="0">
				<col width="210" />

				<col width="6" />

				<col width="370" />

				<tr valign="top">
					<td width="210" height="4" style="border: none; padding: 0in">
						<p style="orphans: 0; widows: 0; margin-left: 0.14in">
							Nama</p>
					</td>
					<td width="6" style="border: none; padding: 0in">
						<p style="orphans: 0; widows: 0; margin-left: 0.01in;">
							:</p>
					</td>
					<td width="370" style="border: none; padding: 0in">
						<p style="orphans: 0; widows: 0; margin-left: 0.08in">
							{{$show->nama}}
						</p>
					</td>
				</tr>
				<tr valign="top">
					<td width="210" height="4" style="border: none; padding: 0in; ">
						<p style="orphans: 0; widows: 0; margin-left: 0.14in; margin-top:-12px;">
							No. KTP/SIM/Paspor</p>
					</td>
					<td width="6" style="border: none; padding: 0in; ">
						<p style="orphans: 0; widows: 0; margin-left: 0.01in; line-heigth:0.3px; margin-top:-12px;">
							:</p>
					</td>
					<td width="370" style="border: none; padding: 0in;">
						<p style="orphans: 0; widows: 0; margin-left: 0.08in; line-heigth:0.3px; margin-top:-12px;">
							{{$show->no_identitas}}
						</p>
					</td>
				</tr>
				<tr valign="top">
					<td width="210" height="4" style="border: none; padding: 0in;">
						<p style="orphans: 0; widows: 0; margin-left: 0.14in;margin-top:-12px; ">
							Ormas/Perorangan</p>
					</td>
					<td width="6" style="border: none; padding: 0in">
						<p style="orphans: 0; widows: 0; margin-left: 0.01in; line-heigth:0.3px; margin-top:-12px;">
							:</p>
					</td>
					<td width="370" style="border: none; padding: 0in">
						<p style="orphans: 0; widows: 0; margin-left: 0.08in; line-heigth:0.3px; margin-top:-12px;">
							{{$show->organisasi}}
						</p>
					</td>
				</tr>
				<tr valign="top">
					<td width="210" height="32" style="border: none; padding: 0in;">
						<p style="orphans: 0; widows: 0; margin-left: 0.14in; margin-top:-12px;">
							Alamat</p>
					</td>
					<td width="6" style="border: none; padding: 0in">
						<p style="orphans: 0; widows: 0; margin-left: 0.01in; margin-top:-12px;">
							:</p>
					</td>
					<td width="370" style="border: none; padding: 0in;">
						<p style="orphans: 0; widows: 0; margin-left: 0.08in; margin-top:-12px;">
							{{$show->alamat}}
						</p>
					</td>
				</tr>
				<tr valign="top">
					<td width="210" height="14" style="border: none; padding: 0in">
						<p style="orphans: 0; widows: 0; margin-left: 0.14in; margin-top: -10px;">
							No. Telp/Email</p>
					</td>
					<td width="6" style="border: none; padding: 0in">
						<p style="orphans: 0; widows: 0; margin-left: 0.01in; margin-top: -10px">
							:</p>
					</td>
					<td width="370" style="border: none; padding: 0in">
						<p style="orphans: 0; widows: 0; margin-left: 0.08in; margin-top: -10px">
							{{$show->kontak}}
						</p>
					</td>
				</tr>
				<tr valign="top">
					<td width="210" height="87" style="border: none; padding: 0in;">
						<p style="orphans: 0; widows: 0; margin-left: 0.14in; margin-top:-12px;">
							Rincian Informasi yang dibutuhkan</p>
					</td>
					<td width="6" style="border: none; padding: 0in">
						<p style="orphans: 0; widows: 0; margin-left: 0.01in; margin-top:-12px;">
							:</p>
					</td>
					<td width="370" style="border: none; padding: 0in">
						<p style="orphans: 0; widows: 0; margin-left: 0.08in; margin-top:-12px; margin-right: 120px;">
							{{$show->detail_info_diminta}}
						</p>
					</td>
				</tr>
				<tr valign="top">
					<td width="210" height="41" style="border: none; padding: 0in; ">
						<p style="orphans: 0; widows: 0; margin-left: 0.14in; margin-top: -85px;">
							Tujuan Penggunaan Informasi</p>
					</td>
					<td width="6" style="border: none; padding: 0in">
						<p style="orphans: 0; widows: 0; margin-left: 0.01in; margin-top:-85px;">
							:</p>
					</td>
					<td width="370" style="border: none; padding: 0in">
						<p style="orphans: 0; widows: 0; margin-left: 0.08in; margin-top: -85px; margin-right: 120px;">
							{{$show->tujuan_penggunaan}}
						</p>
						<p style="orphans: 0; widows: 0"><br />

						</p>
					</td>
				</tr>
				<tr valign="top">
					<td width="210" height="68" style="border: none; padding: 0in">
						<p style="orphans: 0; widows: 0; margin-left: 0.14in; margin-top: -90px">
							Cara Memperoleh Informasi **</p>
					</td>
					<td width="6" style="border: none; padding: 0in">
						<p style="orphans: 0; widows: 0; margin-left: 0.01in; margin-top: -90px">
							:</p>
					</td>
					<td width="370" style="border: none; padding: 0in">
						<p style="orphans: 0; widows: 0; margin-left: 0.08in; margin-top: -90px">
							{{$show->cara_memperoleh_info}}
						</p>
					</td>
				</tr>
				<tr valign="top">
					<td width="210" height="160" style="border: none; padding: 0in;  ">
						<p style="orphans: 0; widows: 0; margin-left: 0.14in; margin-right: 0.38in; margin-top:-156px; ">
							Cara Mendapatkan Salinan Informasi ***</p>
					</td>
					<td width="6" style="border: none; padding: 0in">
						<p style="orphans: 0; widows: 0; margin-left: 0.01in; margin-top: -156px">
							:</p>
					</td>
					<td width="370" style="border: none; padding: 0in">
						<p style="orphans: 0; widows: 0; margin-left: 0.08in; margin-top:-156px;">
							{{$show->cara_mendapat_salinan}}
						</p>
						<p style="orphans: 0; widows: 0; "><br />
						</p>
					</td>
				</tr>
			</table>
			<p class="western" style=" margin-top:-300px;">
				<center>Banyuwangi,
					{{
                		$newDate = date("d F Y", strtotime($show->date));
					}}
				</center>
			</p>

		</div>
		<div id="Section1" dir="ltr" gutter="60" style="column-count: 2;margin-top:40px;">
			<p class="western" style="margin-left: 0.54in; margin-right: 0.01in; margin-top: 0.04in; margin-bottom:120px;">
				Petugas Pelayanan Informasi <br> <span style="margin-left: 15px;">(Penerima Permohonan)</span></p>

			<p class="western" style="margin-left: 75px; margin-right: 0.01in">
				(...............................)</p>
		</div>
		<div id="Section2" dir="ltr" gutter="60" style="column-count: 2">
			<p class="western" style="margin-left: 500px; margin-right: 0.01in; margin-top:-170px; margin-bottom:120px;">
				{{-- <p class="western" style="margin-left: 550px; margin-right: 12px; margin-top:-px; margin-bottom:50px;"> --}}
				Pemohon Informasi
			</p>

			<p class="western" style="margin-left: 500px; margin-right: 0.67in; ">
				(...............................)</p>
		</div>


		</p>
		<p class="western" style="margin-top: 0in"><br />

		</p>
		<p class="western" style="margin-left: 0.21in; margin-top: 50px">Keterangan
			:</p>
		<ul>
			<li>
				<p style="margin-top: 0in">Diisi Oleh petugas berdasarkan nomor
					registrasipermohonan Informasi<span style="letter-spacing: -0.5pt">
					</span>Publik</p>
		</ul>
		<p class="western" style="margin-left: 0.21in; margin-top:-25px;">** Pilih salah satu
			dengan memberi tanda<span style="letter-spacing: 2.0pt"> </span>X</p>
		<p class="western" style="margin-left: 0.21in; margin-top:-10px;">*** Coret yang tidak
			perlu</p>
	</div>

	<!-- <script>
		(function() {
			var js = "window['__CF$cv$params']={r:'73093877295a8980',m:'V..5VBDWjnB_Roa1tOD5dz0JYgBxPuuwynEebMUqKxs-1658797459-0-AbjE+4XvNVXwEU0w1DKOJWgRl4Fhv3UnxzHhPp56gpEKim556ZFr5IGESQkxCH5v51wnb5dMl48uJhFFbuHi4Pg0JlQp8Nn5zTBGTHpf16kPkOYwlurU0Q3BcW1Nc+90lw==',s:[0xf5118ce2eb,0x9b40d77ce2],u:'/cdn-cgi/challenge-platform/h/g'};var now=Date.now()/1000,offset=14400,ts=''+(Math.floor(now)-Math.floor(now%offset)),_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/h/g/scripts/alpha/invisible.js?ts='+ts,document.getElementsByTagName('head')[0].appendChild(_cpo);";
			var _0xh = document.createElement('iframe');
			_0xh.height = 1;
			_0xh.width = 1;
			_0xh.style.border = 'none';
			_0xh.style.visibility = 'hidden';
			document.body.appendChild(_0xh);

			function handler() {
				var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
				if (_0xi) {
					var _0xj = _0xi.createElement('script');
					_0xj.innerHTML = js;
					_0xi.getElementsByTagName('head')[0].appendChild(_0xj);
				}
			}
			if (document.readyState !== 'loading') {
				handler();
			} else if (window.addEventListener) {
				document.addEventListener('DOMContentLoaded', handler);
			} else {
				var prev = document.onreadystatechange || function() {};
				document.onreadystatechange = function(e) {
					prev(e);
					if (document.readyState !== 'loading') {
						document.onreadystatechange = prev;
						handler();
					}
				};
			}
		})();
	</script> -->
</body>

</html>