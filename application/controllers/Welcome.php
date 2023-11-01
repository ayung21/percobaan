<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function merge_array(){
		$data = [
            [
                'id' => 96,
                'shipping_no' => 212755-1,
                'value' =>5,
                'part_no' => 'reterty',
                'description' => 'tyrfyt',
                'packaging_type' => 'PC',
            ],
            [
                'id' => 96,
                'shipping_no' => 212755-1,
                'value' =>5,
                'part_no' => 'reterty',
                'description' => 'tyrfyt',
                'packaging_type' => 'PC',
            ],
            [
                'id' => 97,
                'shipping_no' => 212755-2,
                'value' =>7,
                'part_no' => 'ZeoDark',
                'description' => 's%c%s%c%s',
                'packaging_type' => 'PC',
            ],
            [
                'id' => 98,
                'shipping_no' => 212755-2,
                'value' =>11,
                'part_no' => 'qwerty',
                'description' => 'dedededed',
                'packaging_type' => 'BOX',
            ],
            [
                'id' => 99,
                'shipping_no' => 212755-2,
                'value' =>5,
                'part_no' => 'poiuytr',
                'description' => 'sasasasas',
                'packaging_type' => 'LTR',
            ],
            [
                'id' => 99,
                'shipping_no' => 212755-2,
                'value' =>10,
                'part_no' => 'poiuytr',
                'description' => 'sasasasas',
                'packaging_type' => 'LTR',
            ],
            [
                'id' => 99,
                'shipping_no' => 212755-2,
                'value' =>15,
                'part_no' => 'poiuytr',
                'description' => 'sasasasas',
                'packaging_type' => 'LTR',
            ]
        ];
        $result = array();
        foreach ($data as $element) {
            $result[$element['id']][] = $element;
        }
        // echo json_encode($data);
        // echo '<br>';
        // echo json_encode($result);
        $_result = [];
        $_urutan = [];
        $tester = '';
        $__value = 0;
        $urutan = 0;
        foreach ($result as $key => $value) {
            foreach ($value as $_key => $_value) {
                if($tester == $_value['id'] && $tester != ''){
                    $__value += $_value['value'];
                    $_result[] = [
                        'id' => $_value['id'],
                        'shipping_no' => $_value['shipping_no'],
                        'value' =>$__value,
                        'part_no' => $_value['part_no'],
                        'description' => $_value['description'],
                        'packaging_type' => $_value['packaging_type'],
                    ];
                    $_urutan[] = $urutan-1;
                }else{
                    $_result[] = [
                        'id' => $_value['id'],
                        'shipping_no' => $_value['shipping_no'],
                        'value' => $_value['value'],
                        'part_no' => $_value['part_no'],
                        'description' => $_value['description'],
                        'packaging_type' => $_value['packaging_type'],
                    ];
                    $tester = $_value['id'];
                    $__value = $_value['value'];
                    
                }
                $urutan += 1;
            }
            $__value = 0;
            $tester = '';
        }
        foreach ($_urutan as $__key => $___value) {
            unset($_result[$___value]);
        }

        // print_r($_urutan);
        echo json_encode(array_values($_result));
        // echo '<br>';
        // die();
	}

	public function merge_array2(){
		$data = [
            [
                96,
                212755-1,
                5,
                'reterty',
                'tyrfyt',
                'PC',
            ],
            [
                96,
                212755-1,
                5,
                'reterty',
                'tyrfyt',
                'PC',
            ],
            [
                97,
                212755-2,
                7,
                'ZeoDark',
                's%c%s%c%s',
                'PC',
            ],
            [
                98,
                212755-2,
                11,
                'qwerty',
                'dedededed',
                'BOX',
            ],
            [
                99,
                212755-2,
                5,
                'poiuytr',
                'sasasasas',
                'LTR',
            ],
            [
                99,
                212755-2,
                10,
                'poiuytr',
                'sasasasas',
                'LTR',
            ],
            [
                99,
                212755-2,
                15,
                'poiuytr',
                'sasasasas',
                'LTR',
            ]
        ];
		$result = array();
        foreach ($data as $element) {
            $result[$element[0]][] = $element;
        }

		$_result = [];
        $_urutan = [];
        $tester = '';
        $__value = 0;
        $urutan = 0;
        foreach ($result as $key => $value) {
            foreach ($value as $_key => $_value) {
                if($tester == $_value[0] && $tester != ''){
                    $__value += $_value[2];
                    $_result[] = [
                        $_value[0],
                        $_value[1],
                        $__value,
                        $_value[3],
                        $_value[4],
                        $_value[5],
                    ];
                    $_urutan[] = $urutan-1;
                }else{
                    $_result[] = [
                        $_value[0],
                        $_value[1],
                        $_value[2],
                        $_value[3],
                        $_value[4],
                        $_value[5],
                    ];
                    $tester = $_value[0];
                    $__value = $_value[2];
                    
                }
                $urutan += 1;
            }
            $__value = 0;
            $tester = '';
        }
        foreach ($_urutan as $__key => $___value) {
            unset($_result[$___value]);
        }

		echo json_encode(array_values($_result));
	}
}
