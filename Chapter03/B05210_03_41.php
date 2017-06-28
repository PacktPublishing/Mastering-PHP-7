    Exception implements Throwable {
      /* Properties */
      protected string $message ;
      protected int $code ;
      protected string $file ;
      protected int $line ;

      /* Methods */
      public __construct (
      [ string $message = ""
        [, int $code = 0
          [, Throwable $previous = NULL ]]]
      )

      final public string getMessage (void)
      final public Throwable getPrevious (void)
      final public mixed getCode (void)
      final public string getFile (void)
      final public int getLine (void)
      final public array getTrace (void)
      final public string getTraceAsString (void)
      public string __toString (void)
      final private void __clone (void)
    }
