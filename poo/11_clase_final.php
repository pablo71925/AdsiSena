<?php
  // Una clase con el modificador "final" no puede heredar.
  final class NoExtends {

  }
  class subClass extends NoExtends {

  }
  // Muestra error:
  // Fatal error: Class subClass may not inherit from final class (NoExtends)
  $ne = new subClass;
