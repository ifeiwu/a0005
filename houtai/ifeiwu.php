<?php
//Copyright (c) 2016 iFeiwu.com
 class Ifeiwu { protected $db; protected $table; protected $fields; protected $order; protected $admin; public function __construct() { goto gTYAM; fuYEB: $this->fields = $this->_getTableFields($this->table); goto GvK_4; MNSHf: if (!in_array("\x73\x6f\162\164\x62\171", $this->fields)) { goto HI1V2; } goto wpstO; QktwV: HI1V2: goto FDSrA; Dx7GC: $this->order[] = "\143\x74\x69\x6d\x65\x20\x44\x45\x53\x43"; goto m4tSF; E3QzP: $this->db = ifeiwu\Db::getInstance(); goto Jdt3e; FDSrA: if (!in_array("\143\164\151\x6d\145", $this->fields)) { goto d17PJ; } goto Dx7GC; aPWge: if (!$this->table) { goto JzGc4; } goto E3QzP; gTYAM: $this->admin = $_GET["\x61\144\x6d\151\156"]; goto aPWge; wpstO: $this->order[] = "\163\x6f\x72\164\x62\x79\40\x44\105\x53\x43"; goto QktwV; m4tSF: d17PJ: goto QMSB5; Jdt3e: $this->prefix = $this->db->getPrefix(); goto fuYEB; GvK_4: $this->order = array(); goto MNSHf; QMSB5: JzGc4: goto ccSQh; ccSQh: } public function __destruct() { goto F370V; F370V: if (!APP_DEBUG) { goto qtFbA; } goto yMWYh; rn029: qtFbA: goto Zq9_L; yMWYh: $this->_debug($this->db->log()); goto rn029; Zq9_L: } protected function error($message = '', $data = null) { return $this->_result(1, $message, $data); } protected function success($message = '', $data = null) { return $this->_result(0, $message, $data); } protected function _result($code = 0, $message = '', $data = null) { goto vOGgE; zVDem: $res["\x64\141\164\x61"] = $data; goto s7tgk; suimG: return $res; goto znwij; vGOcU: if (is_array($message)) { goto EOJae; } goto r9vHq; WfjuJ: $res["\144\x61\x74\x61"] = $message; goto ajqEe; r9vHq: $res["\155\145\x73\x73\x61\147\x65"] = $message; goto z4EbD; s7tgk: Jr5uY: goto suimG; W9_NW: $res["\143\157\x64\x65"] = $code; goto vGOcU; vOGgE: $res = array(); goto W9_NW; uwjCW: if (!$data) { goto Jr5uY; } goto zVDem; ajqEe: wO7rK: goto uwjCW; tIkJV: EOJae: goto WfjuJ; z4EbD: goto wO7rK; goto tIkJV; znwij: } protected function _bulidData($request_data) { goto uI6Cf; npmI1: p5dln: goto Pshnx; nZEmx: foreach ($this->fields as $field) { goto hzuBo; hzuBo: $value = $request_data[$field]; goto hKDyi; hKDyi: if (!($value !== null)) { goto hF5e_; } goto CEAVb; KBqbG: hF5e_: goto sD1iJ; CEAVb: $data[$field] = is_array($value) ? json_encode($value) : $this->_encode($value); goto KBqbG; sD1iJ: DJNNU: goto eWkK1; eWkK1: } goto D4VF4; Ac9B9: $data["\143\164\x69\155\x65"] = strtotime($request_data["\x63\164\151\155\145"]); goto SIIZZ; JqUBA: $data["\163\164\141\164\145"] = isset($data["\163\x74\141\x74\x65"]) ? $data["\x73\164\141\x74\x65"] : 0; goto ZHvQ7; uI6Cf: $data = array(); goto nZEmx; SIIZZ: O0tEr: goto DDkQJ; Pshnx: $category = $this->db->select($this->table, $column)->where("\x69\x64\x20\x3d\x20{$pid}")->get(); goto hLhub; XS_Lr: if (!in_array("\141\x6c\151\141\163", $this->fields)) { goto p5dln; } goto d8opq; D4VF4: Ik0a4: goto JqUBA; Tzg0k: $column[] = "\164\151\x74\x6c\145"; goto U0t1y; d8opq: $column[] = "\141\x6c\x69\x61\163"; goto npmI1; aug7j: if (!in_array("\164\151\164\x6c\145", $this->fields)) { goto uv9N8; } goto Tzg0k; DDkQJ: $pid = $data["\160\151\x64"]; goto b8OEY; b8OEY: if (!($pid > 0 && in_array("\x6a\x73\157\x6e", $this->fields))) { goto keFYj; } goto wn7t7; ZHvQ7: if (!isset($request_data["\x63\164\151\x6d\x65"])) { goto O0tEr; } goto Ac9B9; JxEcn: keFYj: goto z2mXS; U0t1y: uv9N8: goto XS_Lr; hLhub: $data["\152\163\157\x6e"] = $category ? json_encode(array("\x63" => $category)) : ''; goto JxEcn; wn7t7: $column = array("\x69\144"); goto aug7j; z2mXS: return $data; goto E0Cw8; E0Cw8: } protected function _encode($data) { goto QPoQr; j447i: if (!is_object($data)) { goto cpQWY; } goto DZcek; PsoFw: PjqaX: goto bBFG3; f6LhB: Bd1O6: goto j447i; DZcek: $tmp = clone $data; goto deJAZ; PW1lu: return htmlspecialchars($data, ENT_QUOTES); goto zrGUE; bBFG3: return $tmp; goto eKbEC; QPoQr: if (!is_array($data)) { goto Bd1O6; } goto b_ite; deJAZ: foreach ($data as $k => $v) { $tmp->{$k} = $this->_encode($v); vuvDz: } goto PsoFw; b_ite: return array_map(array($this, "\x5f\x65\x6e\x63\157\144\x65"), $data); goto f6LhB; eKbEC: cpQWY: goto PW1lu; zrGUE: } protected function _decode($data) { goto HJFI8; kGViA: hPqYi: goto cavuK; HJFI8: if (!is_array($data)) { goto N433B; } goto dh7yH; mM0Zc: N433B: goto z5fiG; pE5rP: foreach ($data as $k => $v) { $tmp->{$k} = $this->_decode($v); nBgJQ: } goto bQrhS; XO0Pr: $tmp = clone $data; goto pE5rP; J91mZ: return $tmp; goto kGViA; dh7yH: return array_map(array($this, "\137\144\145\143\157\144\x65"), $data); goto mM0Zc; cavuK: return htmlspecialchars_decode($data, ENT_QUOTES); goto qr2Xr; bQrhS: KU9X5: goto J91mZ; z5fiG: if (!is_object($data)) { goto hPqYi; } goto XO0Pr; qr2Xr: } protected function _getTableFields($table) { goto hS868; EG54J: cKmur: goto nms6P; Q00lQ: FtOTO: goto brMlO; nms6P: if (!($i < $count)) { goto Fe1tU; } goto pTrUV; ciYg3: $query = $this->db->query("\x53\x45\114\105\103\124\x20\52\40\106\x52\117\x4d\x20{$table}"); goto Zj20G; yM3vL: goto cKmur; goto Ac3ZK; brMlO: $i++; goto yM3vL; UQDID: $i = 0; goto EG54J; cnBWc: N8Sdv: goto ciYg3; AMT5A: return $fields; goto ej0nw; Zb2G5: goto N8Sdv; goto J0IUy; Ac3ZK: Fe1tU: goto AMT5A; pTrUV: $column = $query->getColumnMeta($i); goto FKoTp; FKoTp: $fields[] = $column["\156\x61\x6d\145"]; goto Q00lQ; J0IUy: OHMeu: goto CMuF1; gmiqq: $table = $this->prefix . $this->table; goto Zb2G5; CMuF1: $table = $this->prefix . $table; goto cnBWc; hS868: if ($table) { goto OHMeu; } goto gmiqq; Zj20G: $count = $query->columnCount(); goto UQDID; ej0nw: } protected function _callback($method, $params) { goto Gj6pz; TyOYT: XA085: goto yaGop; Gj6pz: if (!(is_callable(array($this, $method)) !== false)) { goto XA085; } goto xheBC; xheBC: call_user_func_array(array($this, $method), $params); goto TyOYT; yaGop: } protected function _getLevel($pid, $id) { goto BF2Pf; ioSxn: return "\x2c" . $id . "\x2c"; goto DsW_m; J3m8x: $pid = $this->db->select($this->table, "\x70\151\x64")->where(array("\151\x64", "\x3d", $id))->get(0); goto t5rtM; RgrxD: goto Jjskn; goto STNO5; zHpsC: if (!($pid != 0)) { goto woEZl; } goto AW1ui; h8BzO: $this->_getLevel('', $pid); goto KfVgS; Ugy7_: if (!($pid === '')) { goto okPjV; } goto J3m8x; KfVgS: woEZl: goto cIlrc; t5rtM: okPjV: goto zHpsC; BF2Pf: static $list = array(); goto Ugy7_; D497M: if ($id) { goto X46Sy; } goto b1Nuh; xdauL: X46Sy: goto eE_jh; cIlrc: if (count($list) == 0) { goto p0OBn; } goto D497M; DsW_m: Jjskn: goto bWxQt; STNO5: p0OBn: goto ioSxn; eE_jh: return "\x2c" . implode("\54", array_reverse($list)) . "\x2c" . $id . "\54"; goto yKOgk; b1Nuh: return "\54" . implode("\x2c", array_reverse($list)) . "\x2c"; goto k_YWg; AW1ui: $list[] = $pid; goto h8BzO; yKOgk: nbqf4: goto RgrxD; k_YWg: goto nbqf4; goto xdauL; bWxQt: } protected function _saveData($table, $data, $where) { goto aJI6U; znuc5: goto o84db; goto tSkwG; aJI6U: if ($this->db->select($table)->where($where)->has()) { goto hkl9j; } goto Ww8rA; Ww8rA: return $this->db->insert($table, $data)->is(); goto znuc5; tSkwG: hkl9j: goto cdUJN; h8_SR: o84db: goto fmYgj; cdUJN: return $this->db->update($table, $data, $where)->is(); goto h8_SR; fmYgj: } protected function _saveImages($pid, $request_data) { goto YrAlV; hwSlB: $images_path = $request_data["\151\x6d\141\147\145\163\137\160\141\164\150"]; goto m3uuc; jHA6O: $data["\x74\x79\x70\145"] = "\x69\x6d\141\x67\145"; goto yMa2O; qEe4v: $images_order = $request_data["\x69\x6d\141\x67\145\x73\137\157\x72\144\x65\x72"]; goto L2UT9; YsPMP: W6TYa: goto anViY; XwRCp: $images_name = $request_data["\x69\x6d\141\147\145\x73\137\156\141\x6d\145"]; goto hwSlB; L2UT9: $images_title = $request_data["\x69\x6d\x61\x67\x65\x73\137\x74\151\x74\x6c\x65"]; goto XwRCp; m2UCR: foreach ($images_id as $i => $id) { goto WTqiD; CHnOk: if (empty($id)) { goto d20lU; } goto NxR0S; hVnRX: H2yno: goto G6uD7; I_Sc7: unset($data["\151\x6d\x61\x67\145"], $data["\151\155\141\147\x65\137\160\141\x74\150"]); goto hVnRX; GO_ap: $data["\151\155\141\x67\x65"] = $images_name[$i]; goto w9wzw; w9wzw: $data["\151\155\x61\147\x65\137\160\141\164\x68"] = $images_path[$i]; goto f87Hc; m590M: d20lU: goto GO_ap; NxR0S: $this->db->update($this->table, $data, array("\151\144", "\75", $id)); goto EIeTs; UR0Sn: $data["\x6f\x72\x64\x65\162\142\x79"] = $images_order[$i]; goto tqsTr; G6uD7: afQRi: goto e0ywN; f87Hc: $this->db->insert($this->table, $data); goto I_Sc7; tqsTr: $data["\x73\x74\141\164\145"] = $images_state[$i]; goto CHnOk; EIeTs: goto H2yno; goto m590M; WTqiD: $data["\164\x69\164\x6c\145"] = $images_title[$i]; goto UR0Sn; e0ywN: } goto YsPMP; m3uuc: $images_state = $request_data["\x69\155\x61\x67\x65\x73\137\163\164\x61\164\145"]; goto jHA6O; yMa2O: $data["\x70\151\144"] = $pid; goto j0Zcx; j0Zcx: $data["\x63\164\x69\155\x65"] = time(); goto m2UCR; YrAlV: $images_id = $request_data["\x69\155\141\147\x65\x73\137\151\144"]; goto qEe4v; anViY: } protected function _removeFiles2($files) { goto sd2nO; tInZj: if (!$files) { goto WCv_F; } goto nDETd; nDETd: foreach ($files as $key => $value) { goto U9yWZ; g7FjF: foreach ($prefixs as $prefix) { goto PSF90; W1cRg: unlink($filename); goto axqoB; PSF90: $filename = "{$path}\57{$prefix}{$name}"; goto J1M4T; RS0TI: NM1XR: goto wQwBU; J1M4T: if (!file_exists($filename)) { goto vNBZ3; } goto W1cRg; axqoB: vNBZ3: goto RS0TI; wQwBU: } goto TGrWY; TGrWY: pJ9DE: goto pDZNl; QLeKX: if ($prefix) { goto TA7UJ; } goto euDke; QHL9A: henS7: goto ezQSl; v8sIx: goto aXyT8; goto X8O74; oyjBh: $prefixs = explode("\x2c", $prefix); goto g7FjF; TO06B: $prefix = $value["\x70\x72\x65\146\x69\170"]; goto QLeKX; oG_9w: goto henS7; goto QXZPt; pDZNl: aXyT8: goto QHL9A; z1C8z: if (!file_exists($filename)) { goto nAUXt; } goto IrYrW; X8O74: TA7UJ: goto oyjBh; IqFgZ: nAUXt: goto v8sIx; IrYrW: unlink($filename); goto IqFgZ; euDke: $filename = $path . "\x2f" . $name; goto z1C8z; TBnA4: if ($name) { goto sEn3D; } goto oG_9w; QXZPt: sEn3D: goto Z9ZoJ; Z9ZoJ: $path = "\56\56\57" . $value["\160\141\164\x68"]; goto TO06B; U9yWZ: $name = $value["\156\x61\x6d\145"]; goto TBnA4; ezQSl: } goto GbNkL; c_gO9: $files = json_decode($files, true); goto PTAuJ; PTAuJ: XVdXD: goto tInZj; sd2nO: if (!(!empty($files) && !is_array($files))) { goto XVdXD; } goto c_gO9; qXvfW: WCv_F: goto rqYnf; GbNkL: p2md7: goto qXvfW; rqYnf: } protected function _mkdir($path, $mode = 493) { goto tDTaJ; fjLU0: return mkdir($path, $mode, true); goto VZhMa; tDTaJ: if (is_dir($path)) { goto dWi1T; } goto fjLU0; VZhMa: dWi1T: goto YEPUq; YEPUq: return false; goto vchGs; vchGs: } protected function _rmdir($path) { goto JEvds; Bu99c: goto Quh6b; goto Zh0me; SJklG: EcDcW: goto iZO0x; TOD_w: $this->_rmdir("{$path}\57{$item}"); goto WBEJt; WBEJt: Quh6b: goto SJklG; Bd3N5: tS9Nq: goto vEfId; u0Ay_: unlink("{$path}\57{$item}"); goto Bu99c; OrhyQ: goto dAaNm; goto Ril2U; ZSRYW: I9lDh: goto V3UhS; nYkPQ: closedir($handle); goto YLaAu; Zh0me: oFWDc: goto TOD_w; UucJm: return false; goto OrhyQ; ZGuC_: return true; goto mzghP; VgHr9: if (!(false !== ($item = readdir($handle)))) { goto MIPzk; } goto Zte5s; uNLal: return false; goto Bd3N5; iZO0x: goto a7zLQ; goto FuDW8; mzghP: dAaNm: goto ZSRYW; JfAy2: if (is_dir("{$path}\57{$item}")) { goto oFWDc; } goto u0Ay_; Zte5s: if (!($item != "\56" && $item != "\x2e\56")) { goto EcDcW; } goto JfAy2; FuDW8: MIPzk: goto nYkPQ; vEfId: if (!($handle = opendir($path))) { goto I9lDh; } goto XTYYX; XTYYX: a7zLQ: goto VgHr9; Ril2U: uMtxi: goto ZGuC_; JEvds: if (is_dir($path)) { goto tS9Nq; } goto uNLal; YLaAu: if (rmdir($path)) { goto uMtxi; } goto UucJm; V3UhS: } protected function _bulidUploadPath($temp_path, $data) { goto l7jm7; QXZCQ: VlKvs: goto nhSyv; lu9or: if (!is_dir("\56\x2e\57" . $temp_path)) { goto GpnaB; } goto ciKHM; dy2n6: JSIsP: goto K3oGF; DTth5: wzBC_: goto lu9or; K3oGF: GpnaB: goto tHW9E; P3qnN: return $temp_path; goto QXZCQ; iQABn: $true_path = str_replace($path_last, $data[$vardir], $temp_path); goto DTth5; W7Hpy: $path_last = end(explode("\57", $temp_path)); goto J39V3; J39V3: if (!($path_last == $id)) { goto VlKvs; } goto P3qnN; tHW9E: return $true_path; goto IOerw; BkV3_: $true_path = $temp_path; goto dy2n6; l7jm7: $id = $data["\151\x64"]; goto W7Hpy; oDay0: $vardir = current(explode("\x21\75", $path_last)); goto iQABn; ciKHM: if (rename("\x2e\x2e\x2f" . $temp_path, "\x2e\56\57" . $true_path)) { goto JSIsP; } goto BkV3_; nhSyv: if (!(strpos($path_last, "\x21\x3d") !== false)) { goto wzBC_; } goto oDay0; IOerw: } protected function _toTree($list, $pk = "\151\x64", $pid = "\x70\x69\x64", $child = "\x5f\x63\150\x69\154\x64", $root = 0) { goto okDXy; iZQgd: foreach ($list as $key => $data) { goto z1MqN; WWXEA: $parent =& $refer[$parentId]; goto MZx79; t8NKW: if (!isset($refer[$parentId])) { goto mRQcp; } goto WWXEA; UEZbt: if ($root == $parentId) { goto Oq_7V; } goto t8NKW; VE04k: Oq_7V: goto jmclX; MZx79: $parent[$child][] =& $list[$key]; goto WJLoS; z1MqN: $parentId = $data[$pid]; goto UEZbt; DEGwe: Als4J: goto ZaecW; jmclX: $tree[] =& $list[$key]; goto DEGwe; WJLoS: mRQcp: goto QhzFO; QhzFO: goto Als4J; goto VE04k; ZaecW: cZXGw: goto Ou8r0; Ou8r0: } goto HnA5c; okDXy: $tree = array(); goto fYfJP; JKjJm: foreach ($list as $key => $data) { $refer[$data[$pk]] =& $list[$key]; TXOrt: } goto EjcJu; HnA5c: vpjFH: goto Cz8ns; qt26o: $refer = array(); goto JKjJm; QSz0Q: return $tree; goto La01g; EjcJu: IcEoy: goto iZQgd; fYfJP: if (!is_array($list)) { goto Mg_be; } goto qt26o; Cz8ns: Mg_be: goto QSz0Q; La01g: } protected function _rand($length, $islowercase = true, $isuppercase = true, $isnumber = true, $isspecial = false) { goto Z3AcJ; dGaHs: $chars .= "\x30\x31\x32\x33\64\65\66\67\70\71"; goto iAVbw; xijDA: gFGE5: goto LOLmw; fNo2e: if (!($i < $length)) { goto tmrgn; } goto TyRie; F59Ka: $i = 0; goto W5UyI; zL5WJ: $max = strlen($chars) - 1; goto F59Ka; Z3AcJ: if (!$islowercase) { goto gFGE5; } goto htGro; TMyaz: hQNZj: goto BCoKD; gl1jn: goto DzEFA; goto Dpbu_; htGro: $chars .= "\141\x62\143\x64\145\x66\x67\150\x69\152\x6b\x6c\155\x6e\157\x70\x71\162\163\164\x75\x76\167\170\x79\172"; goto xijDA; MwuOB: $chars .= "\x21\x40\43\x24\x25\x5e\46\x2a\50\x29"; goto WIjjw; mfDOt: $result = ''; goto zL5WJ; LOLmw: if (!$isuppercase) { goto XWgr4; } goto UurkP; Dpbu_: tmrgn: goto iXuXs; TyRie: $result .= $chars[rand(0, $max)]; goto TMyaz; wPYGx: if (!$isspecial) { goto t8yt9; } goto MwuOB; BCoKD: $i++; goto gl1jn; iXuXs: return $result; goto Sm1tP; A_iV_: XWgr4: goto FdCE0; UurkP: $chars .= "\101\102\103\104\x45\106\x47\x48\x49\x4a\x4b\x4c\x4d\116\117\x50\x51\x52\x53\124\x55\x56\x57\x58\x59\132"; goto A_iV_; FdCE0: if (!$isnumber) { goto uAZnW; } goto dGaHs; iAVbw: uAZnW: goto wPYGx; W5UyI: DzEFA: goto fNo2e; WIjjw: t8yt9: goto mfDOt; Sm1tP: } protected function _UTF82GBK($str) { goto ht6FL; ad3sF: bKj6M: goto g7p4h; ht6FL: if (stripos(php_uname("\163"), "\x57\x69\156\144\157\x77") !== false) { goto U11ka; } goto zIkd7; zIkd7: return $str; goto woXYr; n99MW: U11ka: goto A3nQi; woXYr: goto bKj6M; goto n99MW; A3nQi: return iconv("\125\124\x46\55\70", "\x47\102\113\x2f\x2f\x49\x47\x4e\117\x52\x45", $str); goto ad3sF; g7p4h: } protected function _serialize($obj) { return base64_encode(gzcompress(serialize($obj))); } protected function _unserialize($txt) { return unserialize(gzuncompress(base64_decode($txt))); } protected function _getIP() { goto y43g7; FG1Ed: cnGPX: goto JdZAb; wEi0S: $realip = getenv("\x48\124\124\x50\137\103\x4c\x49\105\116\124\x5f\111\x50"); goto FG1Ed; UrguT: $realip = $_SERVER["\122\x45\x4d\117\x54\105\137\x41\x44\x44\x52"]; goto I9K48; x051A: if (getenv("\x48\x54\124\x50\x5f\x58\x5f\106\117\122\127\x41\122\x44\x45\x44\x5f\106\117\x52")) { goto mzcMr; } goto iZbx2; tRTOg: if (isset($_SERVER["\x48\x54\x54\x50\137\103\114\111\x45\116\124\x5f\111\x50"])) { goto yB6Sh; } goto UrguT; y43g7: if (isset($_SERVER)) { goto UKJHH; } goto x051A; LxJqK: $realip = empty($realip) ? $_SERVER["\122\x45\x4d\117\124\105\x5f\x41\104\x44\122"] : $realip; goto wtMKx; KyEmN: wl1yJ: goto Pe5i7; g_mzE: $realip = explode("\54", $realip); goto eC1lU; vgJMy: yB6Sh: goto hg9qF; JdZAb: goto WozN6; goto FELA0; HoxfM: $realip = explode("\54", $realip); goto Y8Nwf; Pe5i7: WozN6: goto Yv_Yr; ch9yQ: goto wl1yJ; goto vgJMy; I9K48: goto wl1yJ; goto tOox1; uaCXs: $realip = $_SERVER["\110\x54\x54\x50\137\x58\x5f\x46\117\122\127\101\x52\104\105\x44\x5f\x46\117\x52"]; goto g_mzE; tOox1: gVVMH: goto uaCXs; FELA0: UKJHH: goto pk16e; wtMKx: goto cnGPX; goto jCneb; TLQlT: $realip = getenv("\122\x45\x4d\117\124\x45\137\101\104\x44\x52"); goto i6ABA; i6ABA: goto cnGPX; goto nbyue; nbyue: mzcMr: goto r1KHK; r1KHK: $realip = getenv("\x48\x54\x54\120\137\130\x5f\106\x4f\x52\127\x41\x52\104\105\104\137\106\x4f\x52"); goto HoxfM; hg9qF: $realip = $_SERVER["\x48\x54\x54\x50\x5f\103\114\x49\x45\116\124\137\x49\x50"]; goto KyEmN; Yv_Yr: return $realip; goto nt098; FYH6n: $realip = empty($realip) ? $_SERVER["\122\105\x4d\117\124\105\x5f\x41\104\104\x52"] : $realip; goto ch9yQ; jCneb: Pc5fC: goto wEi0S; Y8Nwf: $realip = $realip[0]; goto LxJqK; eC1lU: $realip = $realip[0]; goto FYH6n; iZbx2: if (getenv("\110\x54\x54\120\x5f\x43\x4c\111\x45\116\x54\137\111\120")) { goto Pc5fC; } goto TLQlT; pk16e: if (isset($_SERVER["\x48\x54\124\120\x5f\130\x5f\x46\117\122\x57\x41\x52\x44\x45\104\137\106\x4f\122"])) { goto gVVMH; } goto tRTOg; nt098: } protected function _trash($item, $request_data) { goto EgN6j; wC4Er: return $this->db->insert("\x74\x72\x61\163\x68", $data)->is(); goto gpnD3; SXC17: $data["\141\x64\155\151\x6e\137\x69\x64"] = $this->admin["\x69\x64"]; goto xR_0k; mKsPF: $data["\163\164\x61\164\145"] = 0; goto Ani59; J9kkF: $data["\160\x61\x74\150"] = $path ? $item[$path] : ''; goto g_fqN; gTtsy: $path = $request_data["\160\141\x74\150"]; goto J9kkF; Ani59: $data["\143\x74\151\x6d\x65"] = time(); goto wC4Er; xR_0k: $data["\141\x64\x6d\x69\156\137\156\x61\x6d\x65"] = $this->admin["\x6e\141\155\x65"]; goto aTwKM; aTwKM: $data["\156\x6f\x74\x65"] = $request_data["\156\157\164\145"]; goto uGRU0; VOXaH: $data["\x64\x61\164\x61"] = json_encode($item); goto mKsPF; g_fqN: $data["\164\141\142\154\x65"] = $this->table; goto VOXaH; uGRU0: $data["\164\x69\164\x6c\145"] = $item["\x74\x69\164\154\x65"]; goto gTtsy; EgN6j: $data = array(); goto SXC17; gpnD3: } protected function _log($type, $data = array()) { goto XFPgs; XFPgs: if (!($type != "\154\x6f\147\151\156")) { goto GsBMO; } goto JlNCc; zl49t: $data["\151\x70"] = $this->_getIP(); goto lJ4p1; lJ4p1: $data["\143\164\151\x6d\145"] = time(); goto dF9jh; finAN: $data["\141\x64\155\x69\x6e\137\156\141\155\x65"] = $this->admin["\x6e\141\x6d\x65"]; goto USCsJ; USCsJ: $data["\165\162\x6c"] = $_SERVER["\x48\124\x54\x50\x5f\122\x45\x46\x45\122\x45\x52"]; goto kpr_j; G3uni: $data["\164\171\160\145"] = $type; goto zl49t; JlNCc: $data["\141\144\x6d\x69\156\x5f\x69\x64"] = $this->admin["\x69\x64"]; goto finAN; kpr_j: GsBMO: goto VhM17; VhM17: $data["\x74\x61\x62\154\145"] = $this->table; goto G3uni; dF9jh: return $this->db->insert("\154\157\147", $data)->is(); goto p6j8x; p6j8x: } protected function _debug($message) { $log = ifeiwu\Log::getInstance(); $log->debug($message); } }