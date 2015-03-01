<?php

class HieraquiaController extends AppController {
	public function listar_cadastros() {
		$this->loadModel('Hieraquia');
		$dados = $this->Hieraquia->find('all',
			array('conditions' => 
				array('ativo' => 1,
					  'id_usuario' => $this->instancia
				)
			)
		);

		$this->set('hieraquias', $dados);
		$this->layout = 'wadmin';
	}

	public function adicionar_hieraquia() {
		$this->layout = 'wadmin';
		$this->set('modulos', $this->modulos);
	}

	public function s_adicionar_hieraquia() {
		$this->loadModel('Hieraquia');
		$dados = $this->request->data('dados');
		$hieraquia['nome'] = $dados['nome'];
		$hieraquia['id_usuario'] = $this->instancia;
		$hieraquia['ativo'] = 1;

		if ($this->Hieraquia->save($dados)) {
			$this->Session->setFlash('Hieraquia salva com sucesso!');
            return $this->redirect('/hieraquia/listar_cadastros');
		} else {
			$this->Session->setFlash('Ocorreu um erro ao salva o produto!');
            return $this->redirect('/hieraquia/listar_cadastros');
		}
	}
	
	public function listar_subusuarios() {
		$this->layout = 'wadmin';
	}


}