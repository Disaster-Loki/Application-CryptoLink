<?php 
namespace crypto\controller;

use crypto\core\Controller;
use crypto\model\DAO\OrdemDAO;
use crypto\model\DTO\OrdemDTO;

class OrdemController extends Controller
{
    public function postAction($request)
    {
        $userId = $request->userId; 
        $tipoOrdem = 'venda';
        $criptomoeda = $request->tipo_moeda;
        $quantidade = $request->amount;
        $preco = $request->preco;
        $statusOrdem = 'Aberta';

        $ordemDTO = new OrdemDTO($userId, $tipoOrdem, $criptomoeda, $quantidade, $preco, $statusOrdem);

        $ordemDAO = new OrdemDAO();
        $ordemDAO->inserirOrdem($ordemDTO);

        redirect(base_url('user'));
        exit();
    }
}

?>