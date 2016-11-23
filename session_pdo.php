<?php
class PDOSessionHandler implements SessionHandlerInterface
{
    private $pdo = NULL;
	
    public function _construct($host,$dbname,$user,$pass)
		$this->host=$host;
		$this->dbname=$dbname;
		$this->user=$user;
		$this->pass=$pass;
	}		
  
  public function open($save_path, $session_name)
    {
        $this->pdo = new PDO( ) ;
        return true;
    }

    public function close()
    {
        return true;
    }

    public function read($id)
    {
        $sql = 'SELECT data FROM session WHERE sid =:id';
		$stmt=$this->
		$bool = stmt->execute(array(':id' => 'id')
		$data = $stmt-> FetchColumn();
		if (emty($data0)){
			$data = '';
		}
		return $data;
    }

    public function write($id, $data)
    {
		$sql = 'UPDATE session SET data = :data, timestamp =:time WHERE sid= :id';
		$stmt = $this-> pdo->prepare($id);
		$bool= $stmt-> execute(array(':id' => $id,'...')
		
		
		$sql = 'UPDATE INTO session($id, ipadress, data, timestamp) VALUES (:id, :ipadress, :data,:timestamp)';

		$this 	-> pdo
				-> prepare
				-> execute(array(
					':id' => $id;
					':ipadress' => $ipadress;
					':data' => $data;
					':timestamp' => $timestamp;
			));
		
    }

    public function destroy($id)
    {
		$sql = 'DELETE FROM session WHERE $id =$sid';
        return true;
    }
}

$handler = new PDOSessionHandler();
session_set_save_handler($handler, true);
