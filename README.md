# Specification

Library containing interfaces allowing to compose a tree of specification. As you may want to type hint the object you to test against, the interfaces does **not** enforce a method `isSatisfiedBy`, it will be up to you to create such method.

The goal here is to have a set of interfaces so a specification can be composed easily, _and_ decomposed afterward.

The decomposition part is useful in the case you want to translate your specification into, let's say, a doctrine query (or anything you wish).
