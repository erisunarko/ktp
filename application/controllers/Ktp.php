<?php

class Ktp extends CI_Controller {

        public function login()
        {
            $this->load->view('login_page');
        }

		public function proses_logout()
		{
			session_destroy();
			$this->load->view('login_page');
		}
		
        public function login_process()
        {
			if ($this->session->userdata('login') == 'true')
			{
				$data_ktp['data'] = $this->db->get('tb_data_ktp');                
                $this->load->view('home', $data_ktp);
			}
			else
			{	
                $username = $this->input->post('username');
                $password = $this->input->post('password');
								
                $this->db->where('username', $username);
                $query = $this->db->get('tb_data_user');
                
                if ($query->num_rows() > 0) 
                {
                        $data = $query->result_array();
                        $stored_pass = $data[0]['password'];
                        $pass_match = password_verify($password, $stored_pass);
                        
                        if ($pass_match) 
                        {
								$session_data = array(
									'login' => 'true',
									'username' => $username
								);								
								$this->session->set_userdata($session_data);
								
                                $data_ktp['data'] = $this->db->get('tb_data_ktp');
                                
                                $this->load->view('home', $data_ktp);
                        }
                        else
                        {
								echo "Password yang anda masukan salah.";
								echo "</br>";
								echo '<a href = "login">Back</a>';
                        }
                }
                else
                {
						echo "Username yang anda masukan tidak terdaftar.";
						echo "</br>";
						echo '<a href = "login">Back</a>';
                }
			}
		}
		
		public function tambah_data()
		{
			$this->load->view('tambah_data');
		}
		
		public function proses_tambah_data()
		{
			$nama = $this->input->post('nama');
			$tempat_lahir = $this->input->post('tempat_lahir');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$alamat = $this->input->post('alamat');
			$agama = $this->input->post('agama');
			$status_kawin = $this->input->post('status_kawin');
			$pekerjaan = $this->input->post('pekerjaan');
			$kewarganegaraan = $this->input->post('kewarganegaraan');
			$masa_berlaku = $this->input->post('masa_berlaku');
			
			$data = array(
				'nama' => $nama,
				'tempat_lahir' => $tempat_lahir,
				'tanggal_lahir' => $tanggal_lahir,
				'jenis_kelamin' => $jenis_kelamin,
				'alamat' => $alamat,
				'agama' => $agama,
				'status_kawin' => $status_kawin,
				'pekerjaan' => $pekerjaan,
				'kewarganegaraan' => $kewarganegaraan,
				'masa_berlaku' => $masa_berlaku				
			);
			$query = $this->db->insert('tb_data_ktp', $data);
			if ($query)
			{
				echo "Data berhasil disimpan.";
				echo "</br>";
				echo '<a href = "login_process">Back</a>';
			}
			
		}
		
		public function update_data_ktp()
		{
			$param = $this->input->get('id');
			$this->db->where('nik', $param);
			$data_ktp['data'] = $this->db->get('tb_data_ktp');
			$this->load->view('update_data', $data_ktp);
		}
		
		public function proses_update_data()
		{
			$nik = $this->input->post('nik');
			
			$nama = $this->input->post('nama');
			$tempat_lahir = $this->input->post('tempat_lahir');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$alamat = $this->input->post('alamat');
			$agama = $this->input->post('agama');
			$status_kawin = $this->input->post('status_kawin');
			$pekerjaan = $this->input->post('pekerjaan');
			$kewarganegaraan = $this->input->post('kewarganegaraan');
			$masa_berlaku = $this->input->post('masa_berlaku');
			
			$data = array(
				'nama' => $nama,
				'tempat_lahir' => $tempat_lahir,
				'tanggal_lahir' => $tanggal_lahir,
				'jenis_kelamin' => $jenis_kelamin,
				'alamat' => $alamat,
				'agama' => $agama,
				'status_kawin' => $status_kawin,
				'pekerjaan' => $pekerjaan,
				'kewarganegaraan' => $kewarganegaraan,
				'masa_berlaku' => $masa_berlaku				
			);
			$this->db->where('nik', $nik);
			$query = $this->db->update('tb_data_ktp', $data);
			if ($query)
			{
				echo "Data berhasil diupdate.";
				echo "</br>";
				echo '<a href = "login_process">Back</a>';
			}
			else
			{
				echo "Update data gagal, periksa kembali data yang anda input.";
				echo "</br>";
				echo '<a href = "login_process">Back</a>';
			}
		}

		public function delete_data_ktp()
		{
			$param = $this->input->get('id');
			$query = $this->db->delete('tb_data_ktp', array('nik' => $param));
			if ($query)
			{
				echo "Data telah dihapus";
				echo "</br>";
				echo '<a href = "login_process">Back</a>';
			}
			else
			{
				echo "Terjadi kesalahan saat proses menghapus data";
				echo "</br>";
				echo '<a href = "login_process">Back</a>';
			}
		}
		
}