import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root',
})
export class MyServiceService {
  constructor() {}
  private todos: string[] = [];

  addTodo(task: string): void {
    this.todos.push(task);
  }
}
