<? 

class Header{
use FontTrait;

    private $size;

    public function __construct($size){
        $this->size = $size;
        switch($size){
            case 1:$this->fontSize(12);break;
            case 2:$this->fontSize(18);break;
            case 3:$this->fontSize(24);break;
            case 4:$this->fontSize(32);break;
            case 5:$this->fontSize(42);break;
            case 6:$this->fontSize(56);break;
            default:break;
        }
    }
    public function sample(){
        $this->fontFamily();
        return $this;
    }

}