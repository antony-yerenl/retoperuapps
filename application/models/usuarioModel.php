<?php
    class usuarioModel extends CI_Model {
        public function __construct() {
            parent::__construct();
        }
        public function list($filter = []) {
            $this->db->select();
            $this->db->from('usuario');
            $this->db->where('estado', '1');
            if (array_key_exists('nombre', $filter)) {
                if (trim($filter['nombre']) !== '') {
                    $this->db->like('nombre', $filter['nombre']);
                }
            }
            
            return $this->db->get()->result();
        }

        public function findUser($id) {
            $this->db->select('id, nombre, correo, fecha_nacimiento, edad');
            $this->db->from('usuario');
            $this->db->where('id', $id);
            
            $this->db->limit(1);
            $result = $this->db->get()->row();
            return ((array) $result);

        }

        public function edit($data, $id) {
            $this->db->where('id', $id);
            $this->db->update('usuario', $data);
            return (int) $this->db->affected_rows();
        }


        public function add($data) {
            $data['estado'] = 1;
            $this->db->insert('usuario', $data);
            return $this->db->insert_id();
        }
    }
?>