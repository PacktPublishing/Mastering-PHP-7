 public function __toString()
 {
   try {
     $this->seek(0);
     return (string) stream_get_contents($this->stream);
   } catch (\Exception $e) {
     return '';
   }
 }
