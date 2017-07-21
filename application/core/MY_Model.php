<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class MY_Model extends CI_model {
    protected $table = NULL;
    protected $key = NULL;
    protected $fields = array();
    protected $CI = null;
    function __construct($table = NULL) {
    	parent::__construct();
    	$this->initialize($table);
        // echo $this->table;
    }
    /**
	 * $this->table = lh_table
	 * $this->fields = các field có trong table
	 * $this->key = id của bảng
	 *
	 */
    private function initialize($table = NULL) {
    	$this->CI = &get_instance();
    	$this->CI->load->database();
    	if(!is_null($table)) {
    		$this->table = $this->db->dbprefix($table);
            // echo $this->table;
    		$this->fields = $this->db->list_fields($this->table);
    		$this->key = $this->db->primary($this->table);
    	}else {
            show_error("CRUD : __construct() must have table name");
        }
    }
    /**
	 * Lấy ra 1 dòng
	 * $conditions : Điều kiện truyền vào là sô hoặc mảng
	 *
	 */
    public function get_by($conditions){
    	if(is_numeric($conditions)) {
    		$this->db->where($this->key, $conditions);
    	}else if (is_array($conditions) && count($conditions) > 0) {
    		//xu ly ca du lieu dau vao
    		$this->get_list_set_input($conditions);
    	}else {
    		show_error("Method: get_by() CRUD : Param must be ARRAY OR NUMBERIC and NOT empty!");
    	}
    	$query = $this->db->get($this->table);
        //echo $this->db->last_query();exit;
    	return $query->row_array();
    }
    /**
	 * Lấy ra danh sách dữ liệu
	 * $conditions : Điều kiện truyền vào là mảng
	 *
	 */
    public function get_rows($conditions = array()){
    	//xu ly ca du lieu dau vao
    	$this->get_list_set_input($conditions);

    	$query = $this->db->get($this->table);
        // echo $this->db->last_query();
    	return $query->result_array();

    }
    /**
	 * Lấy ra tổng số hàng
	 * $conditions : Điều kiện truyền vào là mảng
	 *
	 */
    public function get_total($input = array()){
    	$this->get_list_set_input($input);
	return $this->db->count_all_results($this->table);	
    }
    /**
	 * Them row moi
	 * $input : du lieu POST trên form
	 *Lọc ra những giá trị tồn tại trong $this->flields
	 */
    public function insert($input = array()) {
    	$data = array();
    	foreach ($this->fields as $v) {
    		if(isset($input[$v])) {
    			$data[$v] = $input[$v];
    		}
    	}
    	 return $this->db->insert($this->table, $data);
    }
    /**
	 * lấy ra id vừa mới inset
	 * 
	 */
    public function insert_id(){
    	return $this->db->insert_id();
    }
    /**
	 * update du lieu POST trên form
	 *input dự liệu truyền vào
	 *truyen vao điều kiện nếu ko có where hay where ko phải là mảng thì lấy điều kiện : $this->key = $input[$this->key]
	 * vi dụ $post['id'] = $id;
	 */

    public function update($input, $where = array()){
    	if(!is_array($where) || count($where) == 0) {
    		if(isset($input[$this->key])) {
    			$this->db->where($this->key, $input[$this->key]);
    		}else {
                show_error('Method: update() CRUD : Can not found value key for update');
            }
    	}else {
    		foreach ($where as $field => $data) {
    			if(!in_array($field, $this->fields)){
    				 show_error("CRUD : '$this->table' don't have in '$field'");
    			}
    		}
    		$this->db->where($where);
    	}

    	$data = array();
        foreach ($input as $k => $v) {
            if (in_array($k, $this->fields)) {
                $data[$k] = $v;
            }
        }

        return $this->db->update($this->table, $data);
        // echo $this->last_query();exit;
    }

    function delete($conditions = array()) {
    	if(is_numeric($conditions)) {
            $this->db->where($this->key, $conditions);  
        }else if (is_array($conditions) && count($conditions) > 0) {
        	foreach ($conditions as $field => $data) {
                if (!in_array($field, $this->fields)) {
                    show_error("CRUD : '$this->table' don't have in '$field'");
                }
            }
            $this->db->where($conditions);
        }

    	return $this->db->delete($this->table);
    }
    /**
	 * Gan cac thuoc tinh trong input khi lay danh sach
	 * $input : mang du lieu dau vao
	 */
        protected function get_list_set_input($input = array()) {
        //Select
        if (isset($input['select'])) {
            if (is_string($input['select']) && $input['select']) {
                $this->db->select($input['select']);
            } else {
                show_error("Method: get_row() CRUD : Param SELECT must be STRING and NOT empty!");
            }
        }
        //where
        // string or array(field1 => value1, field2 => value2, ...)
        if (isset($input['where']) && $input['where']) {
            if (is_array($input['where']) && count($input['where']) > 0) {
                $this->db->where($input['where']);
            } else if (is_string($input['where'])) {
                $this->db->where($input['where']);
            } else {
                show_error("Method: get_row() CRUD : Param WHERE must be ARRAY OR STRING and NOT empty!");
            }
        }

        if (isset($input['like']) && $input['like']) {
            if (is_array($input['like']) && count($input['like']) > 0) {
                $this->db->like($input['like']);
            }  else {
                show_error("Method: get_row() CRUD : Param LIKE must be ARRAY  and NOT empty!");
            }
        }
        if (isset($input['or_like']) && $input['or_like']) {
            if (is_array($input['or_like']) && count($input['or_like']) > 0) {
                $this->db->or_like($input['or_like']);
            }  else {
                show_error("Method: get_row() CRUD : Param OR LIKE must be ARRAY  and NOT empty!");
            }
        }
        //or_where
        //$input['or_where'] = "'id>', 1";
        if (isset($input['or_where'])) {
            $this->db->or_where($input['where']);
        }
        //where_in
        //Vi du: input['wherer_in'] = 'id, array(1,2,3)';
        if (isset($input['where_in'])) {
            $this->db->where_in($input['where_in']);
        }
        //order_by
        //string "field1 ASC, field2 DESC"string "field1 ASC, field2 DESC"
        if (isset($input['order_by'])) {
            $this->db->order_by($input['order_by']);
        }
        //limit
        //phải là số
        if (isset($input['limit'])) {
            if (is_numeric($input['limit'])) {
                $offset = isset($input['offset']) ? intval($input['offset']) : 0;
                $this->db->limit($input['limit'], $offset);
            } else {
                show_error("Method: get_row() CRUD : Param LIMIT must be NUMBER!");
            }
        }
    }

    /**
     * Get Next ID
     * @return number
     */
    public function next_id() {
        $query = $this->db->query("SELECT Auto_increment FROM information_schema.tables WHERE table_name = '".$this->table."'");
        // echo "SELECT Auto_increment FROM information_schema.tables WHERE table_name = '".$this->table."'";
        $row = $query->result_array();
        // print_r($row[1]['Auto_increment']);exit;
        // return $row[1]['Auto_increment'];
        return !empty($row[1]['Auto_increment']) ? $row[1]['Auto_increment'] : 1;

    }
}