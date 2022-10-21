<html> 

<head> 
<title>Tampil Data Mahasiswa</title> 
</head> 

<body>     
    <center>         
        <table>             
            <tr>                 
                <th colspan="3">                     
                    Tampil Data Mahasiswa                
                </th>             
            </tr>             
            <tr>                 
                <td colspan="3">                     
                    <hr>                 
                </td>             
            </tr>             
                <tr>                 
                    <td>Nama Mahasiswa</td>                 
                    <td>:</td>                 
                    <td>                     
                        <?= $nama; ?>                 
                    </td>             
                </tr>             
                <tr>                 
                    <td>NIS</td>                 
                    <td>:</td>                 
                    <td>                     
                        <?= $nis; ?>                 
                    </td>             
                </tr>             
                <tr>                 
                    <td>Kelas</td>                 
                    <td>:</td>                 
                    <td>                     
                        <?= $kelas; ?>                 
                    </td>             
                </tr> 
                <tr>                 
                    <td>Tanggal Lahir</td>                 
                    <td>:</td>                 
                    <td>                     
                        <?= $tgl_lahir; ?>                 
                    </td>             
                </tr>
                <tr>                 
                    <td>Tempat lahir</td>                 
                    <td>:</td>                 
                    <td>                     
                        <?= $tmpt_lahir; ?>                 
                    </td>             
                </tr> 
                <tr>                 
                    <td>Alamat</td>                 
                    <td>:</td>                 
                    <td>                     
                        <?= $alamat; ?>                 
                    </td>             
                </tr>  
                <tr>                 
                    <td>Jenis Kelamin</td>                 
                    <td>:</td>                 
                    <td>                     
                        <?= $jns_kelamin; ?>                 
                    </td>             
                </tr> 
                <tr>                 
                    <td>Agama</td>                 
                    <td>:</td>                 
                    <td>                     
                        <?= $agama; ?>                 
                    </td>             
                </tr>        
                <tr>                 
                    <td colspan="3" align="center">                     
                        <a href="<?= base_url('mahasiswa'); 
                        ?>">Kembali</a>                 
                    </td> 
                    </tr>         
                </table>     
            </center> 
        </body>  
</html>