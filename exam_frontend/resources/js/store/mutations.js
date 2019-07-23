let mutations = {
  CREATE_TESTS(state, test){
    state.tests.unshift(test);
  },
  FETCH_TESTS(state, tests){
    return state.tests = tests;
  },
  DELETE_TESTS(state, test){
    let index = state.tests.findIndex(item => item.id === test.id);
    state.tests.splice(index, 1);
  }
}

export default mutations
