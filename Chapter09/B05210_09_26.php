Rx\Observable::just($users)
 ->lift(function () {
  return new UnserializeOperator();
 })
 ->subscribe($observer);
