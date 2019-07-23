let actions = {
  createTest({commit}, test){
    axios.post('/api/tests', test)
      .then(res => {
        commit('CREATE_TESTS', res.data);
      }).catch(err=>{
        console.log(err)
      })
  },
  fetchTests({commit}) {
    axios.get('/api/tests')
      .then(res => {
        commit('FETCH_TESTS', res.data)
      }).catch(err=>{
        console.log(err)
      })
  },
  deleteTest({commit}, post){
    axios.delete('/api/tests/${test.id}')
      .then(res=>{
        if(res.data === 'ok')
          commit('DELETE_TESTS', test)
      }).catch(err=>{
        console.log(err)
      })
  }
}

export default actions
